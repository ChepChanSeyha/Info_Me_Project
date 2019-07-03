@if($image)
    <div class="link text-center" data-toggle="modal" data-target="#imagePreview{!! $id !!}" title="Image preview">
        <i class="fa @if(isset($icon)) {!! $icon !!} @else fa-picture-o @endif"></i>
    </div>

    <div id="imagePreview{!! $id !!}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{ __('main.label_picture') }}</h4>
                </div>
                <div class="modal-body text-center">
                    <img class="image-preview" src="{{ $image }}" alt="{{ __('main.label_picture') }}" title="{{ __('main.label_picture') }}" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="fa fa-times" aria-hidden="true"></i> {{ __('main.label_close') }}</button>
                </div>
            </div>
        </div>
    </div>
@endif