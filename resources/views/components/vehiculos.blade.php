@extends('layouts.master')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Buttons
                </h3>
              </div>
              <div class="card-body pad table-responsive">
                <p>Various types of buttons. Using the base class <code>.btn</code></p>
                <table class="table table-bordered text-center">
                  <tr>
                    <th>Normal</th>
                    <th>Large <code>.btn-lg</code></th>
                    <th>Small <code>.btn-sm</code></th>
                    <th>Extra Small <code>.btn-xs</code></th>
                    <th>Flat <code>.btn-flat</code></th>
                    <th>Disabled <code>.disabled</code></th>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-default">Default</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-default btn-lg">Default</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-default btn-sm">Default</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-default btn-xs">Default</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-default btn-flat">Default</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-default disabled">Default</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-primary">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary btn-xs">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary btn-flat">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary disabled">Primary</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-secondary">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-secondary btn-lg">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-secondary btn-sm">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-secondary btn-xs">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-secondary btn-flat">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-secondary disabled">Secondary</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-success">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-success btn-lg">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-success btn-sm">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-success btn-xs">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-success btn-flat">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-success disabled">Success</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-info">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-info btn-lg">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-info btn-sm">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-info btn-xs">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-info btn-flat">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-info disabled">Info</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-danger">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-danger btn-lg">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-danger btn-sm">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-danger btn-xs">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-danger btn-flat">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-danger disabled">Danger</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-warning">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-warning btn-lg">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-warning btn-sm">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-warning btn-xs">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-warning btn-flat">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-warning disabled">Warning</button>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Outline Buttons
                </h3>
              </div>
              <div class="card-body pad table-responsive">
                <p>Various types of buttons. Using the base class <code>.btn</code></p>
                <table class="table table-bordered text-center">
                  <tr>
                    <th>Normal</th>
                    <th>Large <code>.btn-lg</code></th>
                    <th>Small <code>.btn-sm</code></th>
                    <th>Extra Small <code>.btn-xs</code></th>
                    <th>Flat <code>.btn-flat</code></th>
                    <th>Disabled <code>.disabled</code></th>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-primary">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-primary btn-lg">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-primary btn-sm">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-primary btn-xs">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-primary btn-flat">Primary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-primary disabled">Primary</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-secondary btn-lg">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-secondary btn-sm">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-secondary btn-xs">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-secondary btn-flat">Secondary</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-secondary disabled">Secondary</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-success">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-success btn-lg">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-success btn-sm">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-success btn-xs">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-success btn-flat">Success</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-success disabled">Success</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-info">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-info btn-lg">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-info btn-sm">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-info btn-xs">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-info btn-flat">Info</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-info disabled">Info</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-danger">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-danger btn-lg">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-danger btn-sm">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-danger btn-xs">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-danger btn-flat">Danger</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-danger disabled">Danger</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-warning">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-warning btn-lg">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-warning btn-sm">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-warning btn-xs">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-warning btn-flat">Warning</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-block btn-outline-warning disabled">Warning</button>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection