
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-add_product') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">ID</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    
                        <div class="form-group mb-3">
                            <label for="">Product</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Quantity</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Price</label>
                            <input type="text" name="section" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
