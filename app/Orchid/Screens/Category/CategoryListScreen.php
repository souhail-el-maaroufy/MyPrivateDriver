<?php

namespace App\Orchid\Screens\Category;

use App\Models\Back\Category;
use App\Orchid\Layouts\Category\CategoryListScreen as CategoryCategoryListScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CategoryListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): iterable
    {
        return [
            'category'=>$category,
            'categories'=>Category::paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Category';
    }

    public function description(): ?string
    {
        return 'all categories';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Create category')
            ->modal('ceate-category')
            ->method('AddCategory')
            ->icon('pencil'),
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
            Layout::modal('ceate-category', [
                Layout::rows([
                    Input::make('category.name')
                    ->title('Name :')
                    ->required()
                    ->placeholder('Entre the field name category'),

                    Input::make('category.sub_name')
                    ->title('Sub_name :')
                    ->placeholder('Entre the field sub_name category'),
                ]),
            ])
                ->title('Category')
                ->applyButton('save')
                ->closeButton('Close'),

            CategoryCategoryListScreen::class,
        ];
    }

    public function AddCategory (Category $category , Request $request)
    {
        $category->fill($request->get('category'))->save();

        Alert::info('You have successfully created a category.');

        return redirect()->route('platform.category.list');
    }

    public function EditCategory (Category $category , Request $request)
    {
        $category->fill($request->get('category'))->save();

        Alert::info('You have successfully created a category.');

        return redirect()->route('platform.category.list');
    }

    public function remove(Category $category)
    {
        $category->delete();

        Alert::info('category was deleted success !!!');
        return redirect()->route('platform.category.list');
    }
}
