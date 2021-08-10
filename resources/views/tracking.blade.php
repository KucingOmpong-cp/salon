@include('web')

<div class="container h-static d-flex flex-column justify-content-center align-items-center">
    <h1 class="display-5 text-white mb-5">Tracking Your Booking Order</h1>
    <form class="w-100">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </div>
        </div>
    </form>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</div>    

@include('footer')