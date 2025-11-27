@php
    $album    =   \App\Models\Album::findOrFail($id);
@endphp
<a href="{{ route('admin_album_images', encrypt($album->id)) }}" class="btn btn-outline-warning btn-sm"><i class="fa fa-sliders-h"></i> الصور </a>
<a href="{{ route('admin_album_edit', encrypt($album->id)) }}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i> تعديل </a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$album->id}}">
    <i class="fa fa-trash-alt"></i> حذف
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$album->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$album->name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <i class="fa fa-info-circle text-danger mb-3" style="font-size: 50px"></i>
                <p>هل أنت متأكد من حذف <span class="text-danger">{{$album->name}}</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                <a href="{{ route('admin_album_destroy', encrypt($album->id)) }}" class="btn btn-danger">تأكيد</a>
            </div>
        </div>
    </div>
</div>
