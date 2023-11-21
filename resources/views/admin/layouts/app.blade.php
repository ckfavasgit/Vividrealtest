<!-- dashboard.blade.php -->

@include('admin.layouts.header')

<div class="container-fluid">
    <div class="row">
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('page-title', 'Dashboard')</h1>
            </div>

            <!-- Your content goes here -->
            @yield('content')
        </main>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
        $(function () {
            $('#companies-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('companies.index') }}",
                pageLength: 10,
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    {
                        data: 'logo',
                        name: 'logo',
                    },
                    { data: 'website', name: 'website' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    },
                ],
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#employees-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('employees.index') }}",
                pageLength: 10,
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'last_name', name: 'last_name' },
                    { data: 'email', name: 'email' },
                    { data: 'phone', name: 'phone' },
                    { data: 'company_name', name: 'company.name' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    },
                ],
            });
        });
    </script>
</body>
</html>
