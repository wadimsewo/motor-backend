<?php if ($showLabel && $showField): ?>
<?php if ($options['wrapper'] !== false): ?>
<div <?= $options['wrapperAttrs'] ?> >
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($showLabel && $options['label'] !== false): ?>
    <?=Form::label($name, $options['label'], $options['label_attr'])?>
    <?php endif; ?>

    <div class="clearfix"></div>
    @foreach ($options['files'] as $file)
        {!! Form::hidden('delete_media_'.$file['id']) !!}
            <div class="media-{{$file['id']}}-container" style="margin-bottom: 10px">
            <video class="mejs__player" style="width:100%;height:100%;" controls="controls" width="100%" height="100%" src="{{$file['public_path']}}"></video>
            <div class="float-left">
                <button class="btn btn-danger btn-sm media-{{$options['name_slug']}}-delete" data-id="{{$file['id']}}"><i class="fa fa-trash"></i></button>
                <span><strong>{{ $file['name'] }}</strong></span><br><span style="padding-left: 32px;">{{trans('motor-backend::backend/global.uploaded')}} {{$file['created_at']}}</span>
            </div>
            <div class="clearfix"></div>
        </div>
    @endforeach

    <?php if ($showField): ?>
    <?= Form::input('file', $name, $options['value'], array_merge($options['attr'], ['class' => 'form-control-upload'])) ?>

    @include ('laravel-form-builder::help_block')
    <?php endif; ?>

    @include ('laravel-form-builder::errors')

    <?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
</div>
<?php endif; ?>
<?php endif; ?>

@section('view_scripts')
    <script type="text/javascript">
        $('.media-{{$options['name_slug']}}-delete').click(function (e) {
            e.preventDefault();
            if (!confirm('{!! trans('motor-backend::backend/global.delete_question') !!}')) {
                return false;
            }
            $('div.media-'+$(this).data('id')+'-container').addClass('d-xl-down-none hide');
            $('input[name="delete_media_'+$(this).data('id')+'"]').val(1);
            return false;
        });
    </script>
@append