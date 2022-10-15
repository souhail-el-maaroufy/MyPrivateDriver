<?php

namespace App\Orchid\Screens\Category;

use App\Models\Back\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CategoryEditScreen extends Screen
{
    public $category;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): iterable
    {
        return [
            'category'=>$category
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Edit category';
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
            ->icon('check')
            ->canSee($this->category->exists)
            ->method('EditCategory'),

            Button::make('remove')
            ->icon('trash')
            ->confirm('are you sure you want to deleted this category !!')
            ->method('remove'),
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
          
            Layout::rows([
              
                Input::make('category.name')
                ->title('Name :')
                ->required(),
    
                Input::make('category.sub_name')
                ->title('Sub_name :')
                ->placeholder('Entre field the sub_name'),
  
              ])
        ];
    }

    public function EditCategory (Category $category , Request $request)
    {
        $category->fill($request->get('category'))->save();

        Alert::info('You have successfully updated a category.');

        return redirect()->route('platform.category.list');
    }

    public function remove(Category $category)
    {
        $category->delete();

        Alert::info('category was deleted success !!!');
        return redirect()->route('platform.category.list');
    }
}
