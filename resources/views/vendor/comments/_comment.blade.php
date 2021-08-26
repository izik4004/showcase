@inject('markdown', 'Parsedown')
@php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
@endphp

<div id="comment-{{ $comment->getKey() }}" class="flex flex-row w-full mx-auto">
    <img class="mr-4 " src="https://www.gravatar.com/avatar/{{ md5($comment->commenter->email ?? $comment->guest_email) }}.jpg?s=64" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
    <div class="media-body">
        <h5 class="mt-0 mb-1">{{ $comment->commenter->name ?? $comment->guest_name }} <small class="text-muted">- {{ $comment->created_at->diffForHumans() }}</small></h5>
        <div class="mt-2" style="white-space: pre-wrap;">{!! $markdown->line($comment->comment) !!} </div>

        

        <div x-data="{ isOpen: false }" class="mt-2">
            @can('reply-to-comment', $comment)
                <button @click="isOpen = true" type="button"  data-target="#reply-modal-{{ $comment->getKey() }}" class="text-blue-500">@lang('comments::comments.reply')</button>
            @endcan
            @can('edit-comment', $comment)
                <button @click="isOpen = true" type="button"  data-target="#comment-modal-{{ $comment->getKey() }}" class="text-blue-500">@lang('comments::comments.edit')</button>
            @endcan
            @can('delete-comment', $comment)
                <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="text-red-500 ml-4">@lang('comments::comments.delete')</a>
                <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            @endcan
        

        @can('edit-comment', $comment)
            <div x-show="isOpen" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog" class="border absolute top-36 ml-44 max-w-2/5 h-2/5 flex overflow-y-auto items-center rounded-lg">
                <div class="container mx-auto rounded-lg bg-white" role="document">
                    <div class="pt-4 flex flex-col ">
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div class="w-full h-8 border-b flex flex-row">
                                <h5 class="font-bold mx-4">@lang('comments::comments.edit_comment')</h5>
                                <button @click="isOpen = false" type="button" class="close -mt-4 font-bold" data-dismiss="modal">
                                <span class="mx-6 ml-44 -mt-8">&times;</span>
                                </button>
                            </div>
                            <div class="py-4 flex flex-row">
                                <div class="mt-4 px-4 w-full">
                                    <label for="message">@lang('comments::comments.update_your_message_here')</label><br>
                                    <textarea required class="h-24 mt-4 border rounded-lg" name="message" rows="3">{{ $comment->comment }}</textarea><br>
                                </div>
                                
                            </div>
                            <div class=" border-t items-justify-right">
                                <button type="button" class="border border-black hover:bg-black hover:text-white py-2 px-4 m-4 " data-dismiss="modal">@lang('comments::comments.cancel')</button>
                                <button type="submit" class="border border-green-500 hover:bg-green-500 hover:text-white py-2 px-4 mt-4">@lang('comments::comments.update')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan


        @can('reply-to-comment', $comment)
            <div  x-show="isOpen" id="reply-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog" class="border absolute top-36 ml-44 max-w-2/5 h-2/5 flex overflow-y-auto items-center rounded-lg">
                <div class="container mx-auto rounded-lg bg-white" role="document">
                    <div class="pt-4 flex flex-col">
                        <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                            @csrf
                            <div class="w-full h-8 border-b flex flex-row">
                                <h5 class="font-bold mx-4">@lang('comments::comments.reply_to_comment')</h5>
                                <button @click="isOpen = false" type="button" class="close -mt-4 font-bold" data-dismiss="modal">
                                <span class="mx-6 ml-44 -mt-8">&times;</span>
                                </button>
                            </div>
                            <div class="py-4 flex flex-row">
                                <div class="mt-4 px-4 w-full">
                                    <label for="message">@lang('comments::comments.enter_your_message_here')</label><br>
                                    <textarea required class="h-24 mt-4 border rounded-lg" name="message" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="border-t items-justify-right">
                                <button type="button" class="border border-black hover:bg-black hover:text-white py-2 px-4 m-4">@lang('comments::comments.cancel')</button>
                                <button type="submit" class="border border-green-500 hover:bg-green-500 hover:text-white py-2 px-4 mt-4">@lang('comments::comments.reply')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan
    </div>
        <br />{{-- Margin bottom --}}

        <?php
            if (!isset($indentationLevel)) {
                $indentationLevel = 1;
            } else {
                $indentationLevel++;
            }
        ?>

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel)
            {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
</div>

{{-- Recursion for children --}}
@if($grouped_comments->has($comment->getKey()) && $indentationLevel > $maxIndentationLevel)
    {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
    @foreach($grouped_comments[$comment->getKey()] as $child)
        @include('comments::_comment', [
            'comment' => $child,
            'grouped_comments' => $grouped_comments
        ])
    @endforeach
@endif
