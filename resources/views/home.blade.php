@extends('layouts.app')

@section('content')
<style>
  .container{
    padding:10px;
  }
  .dataTables_filter,.paging_simple_numbers{
    float:right;
  }
  .table-responsive{
    overflow-x: hidden !important;
  }
  
</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
          <table id="dt-basic-checkbox" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">Position</th>
                <th class="th-sm">Office</th>
                <th class="th-sm">Age</th>
                <th class="th-sm">Start date</th>
                <th class="th-sm">Salary</th>
                <th class="th-sm">Action</th> 
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td><button type="button" class="btn btn-primary">Buy Now</button></td>
              </tr>
              <tr>
                
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td><button type="button" class="btn btn-primary">Buy Now</button></td>
              </tr>
              <tr>
                
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td><button type="button" class="btn btn-primary">Buy Now</button></td>
              </tr>
              <tr>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td><button type="button" class="btn btn-primary">Buy Now</button></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $('#dt-basic-checkbox').dataTable({
    columnDefs: [{
    orderable: false,
    className: 'select-checkbox',
    targets: 0
    }],
    select: {
    style: 'os',
    selector: 'td:first-child'
    }
  });
</script>
@endsection
