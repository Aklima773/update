<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <style>
    .div_centerr {
      text-align: center;


    }

    .span {
      margin-right: 14px;
    }

    .h1_font {
      font-size: 40px;
      padding-bottom: 40px;
    }

    .input_color {
      color: yellow;
    }

    .center {
      margin: auto;
      width: 50%;
      text-align: center;
      margin-top: 30px;
      border: 3px solid whitesmoke;
    }

    .img_size {
      width: 80px;
      height: 80px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    @include('admin.leftsidebar')

    @include('admin.topbar')

    <!-- body part     -->

    <div class="main-panel">
      <div class="content-wrapper">





        <!-- section start -->
        <div class="div_centerr">
          <h1 class="h1_font" style="color:white">Order Details</h1>



          <div class="control-group">
            <form action="{{ url('/invoices') }}" method="get">
              <input type="text" name="number">




              <input class="btn btn-info" type="Submit" value="Submit" style="background-color:#2596be">

            </form>
          </div>


          <br>
          <!-- showing added category -->
          <div id="print">
            <div class="container" style="color:black; text-align:left">
              <div class="card">
                <div class="card-header">
                  Invoice
                  <!-- <input type="text" value=""> -->

                  <span class="float-right"> <strong>{{ $name }}</strong></span>
                  <span class="float-right"> <strong>{{ $name }}</strong></span>

                </div>
                <div class="card-body">
                  <div class="row mb-4">
                    <div class="col-sm-6">
                      <h2 class="mb-3" style="font-weight:700; font-size:25px">Address:</h2>
                      <div>
                        <strong>Name: </strong>
                      </div>

                    </div>

                    <div class="col-sm-6">
                      <h2 class="mb-3" style="font-weight:700; font-size:25px">OrderNumber: </h2>
                      <div>

                      </div>


                    </div>

                    <div class="table-responsive-sm">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th class="center">#</th>
                            <th>Item</th>
                            <th>Description</th>

                            <th class="right">Unit Cost</th>
                            <th class="center">Qty</th>
                            <th class="right">Total</th>
                          </tr>
                        </thead>



                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-sm-5">

                      </div>

                      <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                          <tbody>
                            < </tbody>
                        </table>

                      </div>

                    </div>

                  </div>
                </div>
              </div>

            </div>


          </div>

        </div>
        <!-- section end -->

        <!-- body part     -->


        <script>
          // wholepage print
          function myfun() {
            window.print();
          }

          function myfun(print) {
            var backup = document.body.innerHTML;
            var divcontent = document.getElementById(print).innerHTML;
            document.body.innerHTML = divcontent;
            window.print();
            document.body.innerHTML = backup;
          }
        </script>


        @include('admin.js')
</body>

</html>
