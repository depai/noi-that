<div class='btn-group'>
    @if(@$showRoute)
        <a href="{{ $showRoute }}" class='btn btn-primary btn-xs' style="margin-right: 5px"><i class="mdi mdi-eye"></i></a>
    @endif
    @if(@$editRoute)
        <a href="{{ $editRoute }}" class='btn btn-default btn-xs' style="margin-right: 5px"><i class="mdi mdi-pencil"></i></a>
    @endif
    @if(@$deleteRoute)
        <button class="btn btn-danger btn-xs delete-btn" data-table="{{ $tableRoute }}" data-url="{{ $deleteRoute }}"><i class="mdi mdi-delete"></i></button>
    @endif
    
</div>
