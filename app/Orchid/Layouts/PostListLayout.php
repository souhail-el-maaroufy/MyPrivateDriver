<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use App\Models\Pack;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'packs';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
            return [
                TD::make('title', 'Title')
                    ->render(function (Pack $pack) {
                        return Link::make($pack->title)
                            ->route('platform.pack.edit', $pack);
                    }),
                    TD::make('commercial_name', 'Commercial name')
                    ->render(function (Pack $pack) {
                        return Link::make($pack->commercial_name)
                            ->route('platform.pack.edit', $pack);
                    }),
                    TD::make('description', 'Description')
                    ->render(function (Pack $pack) {
                        return Link::make($pack->description)
                            ->route('platform.pack.edit', $pack);
                    }),
                    TD::make('color', 'Color')
                    ->render(function (Pack $pack) {
                        return Link::make($pack->color)
                            ->route('platform.pack.edit', $pack);
                    }),
                    TD::make('pric', 'Price')
                    ->render(function (Pack $pack) {
                        return Link::make($pack->pric)
                            ->route('platform.pack.edit', $pack);
                    }),
    
                TD::make('created_at', 'Created'),
                TD::make('updated_at', 'Last edit'),
                TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Pack $pack) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.pack.edit', $pack->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->method('remove', [
                                    'id' => $pack->id,
                                ]),
                        ]);
                })
            ];
    }
}
