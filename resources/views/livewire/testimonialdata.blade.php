<div>
  <main class="app-main">
    <!-- App Content Header -->
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="mb-0">Customer Testimonials</h3>
          </div>
          <div class="col-sm-6 text-end">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- End App Content Header -->

    <!-- App Content -->
    <div class="app-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <!-- Card Header -->
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Customer Reviews Table</h5>
                <a href="{{ route('adddata') }}" class="btn btn-success btn-sm">Add New</a>
              </div>

              <!-- Card Body -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped mb-0 align-middle">
                    <thead class="table-dark">
                      <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 15%">Name</th>
                        <th style="width: 15%">Position</th>
                        <th style="width: 50%">Message</th>
                        <th style="width: 15%" class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($testimonials as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->position }}</td>
                          <td>{{ $item->message }}</td>
                          <td class="text-center">
                            <a href="{{ route('editdata', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="5" class="text-center text-muted">No testimonials found.</td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Card Footer -->
              <div class="card-footer d-flex justify-content-end">
                {{ $testimonials->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End App Content -->
  </main>
</div>
