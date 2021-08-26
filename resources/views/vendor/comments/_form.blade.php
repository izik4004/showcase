<div class="mt-4 border w-full bg-white rounded-lg">
    <div class="">
        @if($errors->has('commentable_type'))
            <div class="bg-red-500" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if($errors->has('commentable_id'))
            <div class="bg-red-500" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            {{-- Guest commenting --}}
            @if(isset($guest_commenting) and $guest_commenting == true)
                <div class="m-8">
                    <label for="message">@lang('comments::comments.enter_your_name_here')</label>
                    <input type="text" class="form-control @if($errors->has('guest_name')) is-invalid @endif" name="guest_name" />
                    @error('guest_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="m-4 text-lg font-semibold">
                    <label for="message">@lang('comments::comments.enter_your_email_here')</label>
                    <input type="email" class="form-control @if($errors->has('guest_email')) is-invalid @endif" name="guest_email" />
                    @error('guest_email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endif

            <div class="m-4">
                <label for="message" >@lang('comments::comments.enter_your_message_here')</label><br>
                <textarea class="border h-24 mt-4 w-4/5 rounded-lg @if($errors->has('message')) is-invalid @endif" name="message" rows="3"></textarea>
                <div class="invalid-feedback text-blue-500">
                    @lang('comments::comments.your_message_is_required')
                </div>
                
            </div>
            <button type="submit" class="border border-green-500 rounded-lg px-4 py-2 my-4 ml-5">@lang('comments::comments.submit')</button>
        </form>
    </div>
</div>
<br />