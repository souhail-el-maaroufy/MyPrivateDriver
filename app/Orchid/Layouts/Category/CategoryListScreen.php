<?php

namespace App\Orchid\Layouts\Category;

use App\Models\Back\Category;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListScreen extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id','Id')->align(TD::ALIGN_CENTER)
            ->render(function(Category $category){
                return Link::make($category->id);
            }),

            TD::make('name','Name')->align(TD::ALIGN_CENTER)
            ->render(function(Category $category){
                return Link::make($category->name);
            }),

            TD::make('sub_name','Sub_name')->align(TD::ALIGN_CENTER)
            ->render(function(Category $category){
                return Link::make($category->sub_name);
            }),
           
            TD::make('Action')
            ->render(function(Category $category){
                return DropDown::make() 
                ->icon('options-vertical')
                ->list([
                    Link::make('edit')
                    ->icon('pencil')
                    ->route('platform.category.edit',$category->id),

                    Button::make('remove')
                    ->icon('trash')
                    ->confirm('are you sure you want to deleted this category !!')
                    ->method('remove', [
                        'id' => $category->id,
                    ]),
                ]);
            })
        ];
    }
}
