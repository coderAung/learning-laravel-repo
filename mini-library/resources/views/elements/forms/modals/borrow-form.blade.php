<div class="modal" id="borrow-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center mb-2 fs-5 fw-bold">
                            Borrow Form
                        </div>
                        <form action="{{url('/books')}}" method="post" class="col">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="mb-1">
                                    <i class="bi-book"></i>
                                    Book : </label>
                                <span id="bookInfo" class="form-control">
                                    Laravel by Ei Maung
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-1">
                                    <i class="bi-person-check"></i>
                                    Check By : </label>
                                <span class="form-control">
                                    Thuzar
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-1">
                                    <i class="bi-arrow-up-square"></i>
                                    Borrow Date : </label>
                                <span id="borrowDate" class="form-control">
                                    29/05/24
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-1">
                                    <i class="bi-arrow-down-square"></i>
                                    Return Date : </label>
                                <span id="returnDate" class="form-control text-danger">
                                    05/06/24
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-1">
                                    <i class="bi-person-circle"></i>
                                    Member : </label>
                                <input type="text" class="form-control" placeholder="Enter Member's Email">
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-danger me-2" data-bs-dismiss="modal">
                                    <i class="bi-x"></i>
                                    Cancel</a>
                                <button class="btn btn-success">
                                    <i class="bi-send"></i>
                                    Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>