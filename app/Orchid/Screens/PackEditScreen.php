<?php

namespace App\Orchid\Screens;

use Illuminate\Http\Request;
use App\Models\Pack;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Alert;

class PackEditScreen extends Screen
{

    public $pack;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Pack $pack): array
    {
        return [
            'pack' => $pack
        ];
    }

    /**
     * Display header name.
     *
     */
    public function name(): ?string
    {
        return $this->pack->exists ? 'Edit pack' : 'Creating a new pack';
    }

    /**
     * Button commands.
     *
     */
    public function commandBar(): array
    {
        return [
            Button::make('save')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->pack->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->pack->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->pack->exists),
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
                Input::make('pack.title')
                    ->title('Title'),

                Input::make('pack.commercial_name')
                    ->title('Commercial name'),

                Input::make('pack.pric')->type('number')
                    ->title('Pric'),

                Input::make('pack.color')->type('color')
                    ->title('Color'),

                TextArea::make('pack.description')->rows(5)
                    ->title('Description'),


                CheckBox::make('pack.active')
                    ->value(0)
                    ->title('Active')

            ])
        ];
    }

    public function createOrUpdate(Pack $pack, Request $request)
    {
        $pack->fill($request->get('pack'))->save();

        Alert::info('You have successfully created a pack.');

        return redirect()->route('platform.pack.list');
    }

    /**
     * @param Pack $post
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Pack $pack)
    {
        $pack->delete();

        Alert::info('You have successfully deleted the pack.');

        return redirect()->route('platform.pack.list');
    }
}
