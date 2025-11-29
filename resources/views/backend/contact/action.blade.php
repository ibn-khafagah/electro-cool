@php
    $contact    =   \App\Models\Contact::findOrFail($id);
@endphp
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalMessage{{$contact->id}}">
    <i class="fa fa-eye"></i> الرسالة
</button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$contact->id}}">
    <i class="fa fa-trash-alt"></i> حذف
</button>

<!-- Modal Message-->
<div class="modal fade" id="exampleModalMessage{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$contact->name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="">الرسالة</label>
                        <textarea class="form-control" rows="10" readonly>{{$contact->notes}}</textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$contact->name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <i class="fa fa-info-circle text-danger mb-3" style="font-size: 50px"></i>
                <p>هل أنت متأكد من حذف <span class="text-danger">{{$contact->name}}</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                <a href="{{ route('admin_contact_destroy', encrypt($contact->id)) }}" class="btn btn-danger">تأكيد</a>
            </div>
        </div>
    </div>
</div>
