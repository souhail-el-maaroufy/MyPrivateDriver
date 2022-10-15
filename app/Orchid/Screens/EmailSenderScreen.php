<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class EmailSenderScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return "Email sender";
    }
    
    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Tool that sends ad-hoc email messages.";
    }
       /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Send Message')
                ->icon('paper-plane')
                ->method('sendMessage')
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
                Input::make('subject')
                    ->title('Subject')
                    ->required()
                    ->placeholder('Message subject line')
                    ->help('Enter the subject line for your message'),
    
                // Relation::make('users.')
                //     ->title('Recipients')
                //     ->multiple()
                //     ->required()
                //     ->placeholder('Email addresses')
                //     ->help('Enter the users that you would like to send this message to.')
                //     ->fromModel(User::class,'name','email'),
    
                Quill::make('content')
                    ->title('Content')
                    ->required()
                    ->placeholder('Insert text here ...')
                    ->help('Add the content for the message that you would like to send.')
    
            ])
        ];
    }

     /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'subject' => 'required|min:6|max:50',
            'content' => 'required|min:10'
        ]);

        // Mail::raw($request->get('content'), function (Message $message) use ($request) {
        //     $message->from('sample@email.com');
        //     $message->subject($request->get('subject'));

        //     foreach ($request->get('users') as $email) {
        //         $message->to($email);
        //     }
        // });


        Alert::info('Your email message has been sent successfully.'.$request->get('subject').' '.$request->get('content'));
    }
}
