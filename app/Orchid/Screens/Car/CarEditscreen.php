<?php

namespace App\Orchid\Screens\Car;

use App\Http\Controllers\Back\Car\CarController;
use App\Models\Back\Car;
use App\Models\Back\Category;
use App\Models\Back\Driver;
use Orchid\Support\Color;
use Orchid\Attachment\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class CarEditscreen extends Screen
{

    public $car;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Car $car, Category $category): iterable
    {
        $car->load('attachment');
        return [
            'car' => $car,
            'category' => $category
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'CarEditscreen';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('save')
                ->method('Create_car')
                ->icon('check')
                ->canSee(!$this->car->exists),

            Button::make('save')
                ->method('update_car')
                ->icon('check')
                ->canSee($this->car->exists),

            Button::make('remove')
                ->icon('trash')
                ->confirm('are you sure you want to deleted this car !!!')
                ->route('platform.car.list'),

        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::modal('exampleModal', [
                Layout::rows([
                    Input::make('category.name')
                        ->title('Name :')
                        ->placeholder('Enter the field name category'),

                    Input::make('category.sub_name')
                        ->title('Sub name :')
                        ->placeholder('Enter the field sub name')
                ]),
            ])->title('Create category')
            ->applyButton('save')
            ->closeButton('Close'),

            Layout::rows([

                // Cropper::make('car.image')
                //     ->targetRelativeUrl()
                //     ->upload_max_filesize()
                //     ->post_max_size()
                //     ->settings()
                //     ->width(500)
                //     ->height(500),


                Upload::make('car.attachment')
                ->title('All files'),

                Group::make([

                    Input::make('car.name')
                        ->title('Name :')
                        ->required()
                        ->placeholder(' Enter the field Name '),

                    Input::make('car.code')
                        ->title('Car code :')
                        ->type('number')
                        ->required()
                        ->placeholder(' Enter the field code '),
                ]),

                Group::make([

                    Input::make('car.bags')
                        ->title('Capacity Bags :')
                        ->type('number')
                        ->required()
                        ->placeholder(' Enter the field bags '),

                    Input::make('car.personne')
                        ->type('number')
                        ->title('Capacity Personne :')
                        ->required()
                        ->placeholder(' Enter the field personne '),
                ]),

                Group::make([

                    Input::make('car.price_km')
                        ->type('number')
                        ->title('Price Km :')
                        ->required()
                        ->placeholder(' Enter the field price km '),

                    Input::make('car.hour_rate')
                        ->type('number')
                        ->title('Hour Rate :')
                        ->required()
                        ->placeholder(' Enter the field hour rate '),
                ]),

                Group::make([

                    Input::make('car.price_airport')
                        ->title('Price Airport :')
                        ->type('number')
                        ->required()
                        ->placeholder(' Enter the field price airport '),

                    Input::make('car.price_min')
                        ->title('Price Min :')
                        ->type('number')
                        ->required()
                        ->placeholder(' Enter the field price min '),
                ]),

                Group::make([

                    Input::make('car.price_day')
                        ->type('number')
                        ->title('Price Day :')
                        ->required()
                        ->placeholder(' Enter the field price day '),

                    Input::make('car.price_half')
                        ->type('number')
                        ->title('Price Half :')
                        ->required()
                        ->placeholder(' Enter the field price Half '),
                ]),

                Group::make([
                    ModalToggle::make('Add category')
                        ->modal('exampleModal')
                        ->type(Color::SECONDARY())
                        ->method('Addcategory')
                        ->icon('plus'),

                    Button::make('Add Driver')
                        ->icon('plus')
                        ->type(Color::SECONDARY())
                        ->method('Adddriver')

                ]),

                Group::make([

                    Select::make('car.category_id')
                        ->title('Category :')
                        ->fromModel(Category::class, 'name'),

                    Select::make('car.driver_id')
                        ->fromModel(Driver::class, 'full_name')
                        ->title('Driver :')
                        ->placeholder(''),
                ]),


            ]),



        ];
    }


    public function Addcategory(Category $category, Request $request)
    {
        $category->fill($request->get('category'))->save();

        Alert::message('You have successfully created a category.');
    }

    public function Adddriver()
    {
        return redirect()->route('platform.driver.edit');
    }

    public function Create_car(Car $car, Request $request)
    {
        $car->fill($request->get('car'))->save();

        $car->attachment()->syncWithoutDetaching(
            $request->input('car.attachment', [])
        );

        Alert::info('You have successfully created a car.' . $request->file('image'));
        return redirect()->route('platform.car.list');
    }

    public function update_car(Car $car, Request $request)
    {
        $car->fill($request->get('car'))->save();
        $car->attachment()->syncWithoutDetaching(
            $request->input('car.attachment', [])
        );

        Alert::message('Updated car was successfully !!');
        return redirect()->route('platform.car.list');
    }

    public function remove(Car $car)
    {
        $car->delete();

        Alert::info('You have successfully deleted the car.');

        return redirect()->route('platform.car.list');
    }
}
