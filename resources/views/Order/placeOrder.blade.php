<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=Lexend+Deca:wght@100;300&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&family=Lexend+Deca:wght@100;300&family=Libre+Baskerville&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&family=Lexend+Deca:wght@100;300&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <!-- Navigation Bar -->
    @include('user.nav')

    <!-- Place Order Div Starts Here  -->

    <div class="container pb-5 mb-5">
        <div class="center-content">
            <div class="row placeOrder pt-3 pb-3 mt-2 mb-2">
                <h2 class="pt-5 pb-2">Place Order</h2>
            </div>
            <div class="row pt-3 pb-5 mb-5">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3 col-sm-4 col-md-4 text-center active p-4">
                            <span class="order-first">1. </span><span class="orderspan"> Your Order</span>

                        </div>
                        <div class="col-3 col-sm-4 col-md-4 text-center p-4">
                            <span class="order-first">2. </span><span class="orderspan">Login/Signup</span>
                            
                        </div>
                        <div class=" col-3 col-sm-4 col-md-4 text-center p-4"><a href=""></a>
                            <span class="order-first">3. </span><span class="orderspan">Make Payment</span>  
                            
                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
            @endif
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                          <div class="col-md-7">
                            <form id="order-form" name="orderForm" method="POST" action="/orderInfo" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                <div class="col-md-6 order-form pb-3 pl-0">
                                  <span class="order-form">Subject</span>
                                  <div class="dropdown p-2 mt-3">
                                    <select class="text-end form-control" required id="subject-select" name="subject">
                                      <option value="" selected disabled>Select Subject</option>
                                      <option value="History">History</option>
                                      <option value="English">English</option>
                                      <option value="ComputerSciences">Computer Sciences</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a subject.</div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <span class="order-form">Topic</span>
                                  <div class="pt-2">
                                    <input type="text" class="input-field-order form-control" placeholder="Main Idea" required id="topic-input" name="topic">
                                    <div class="invalid-feedback">Please enter a topic.</div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12 pt-3 pl-0">
                                  <span class="order-form pb-3 mb-3">Detailed Instructions</span>
                                  <div class="col-md-12 p-0 pt-4">
                                    <textarea class="text-area pb-3 form-control" required id="instructions-textarea" name="instructions"></textarea>
                                    <div class="invalid-feedback">Please provide instructions.</div>
                                  </div>
                                </div>
                              </div>
                              <div class="row pt-3 pb-4 mb-4">
                                <div class="col-md-5 pl-0">
                                  <span class="order-form pb-3">Deadline</span>
                                  <div class="pages-order mr-4 text-center">
                                    <div class="input-group date" id="datepicker">
                                      <input id="endDate" class="form-control" type="date" name="deadline" />
                                      <span id="endDateSelected"></span>
                                    </div>
                                    <div class="invalid-feedback">Please select a deadline date.</div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <span class="order-form">Pages</span>
                                  <div class="pages-order mr-4 text-center">
                                    <button class="btn btn-sm" onclick="subtractPage()" type="button">-</button>
                                    <span id="pageCountValue">0</span>
                                    <button class="btn btn-sm" onclick="addPage()" type="button">+</button>
                                    <input type="hidden" id="pageCount" name="pageCount" value="0">
                                  </div>

                                </div>
                                <div class="col-md-3">
                                  <span class="order-form">Attach File</span>
                                  <div class="upload-container">
                                    <label for="file-upload">
                                      <img id="uploaded-image" src="/images/backup.png" width="25" height="25" alt="">
                                    </label>
                                    <input type="file" id="file-upload" accept=".pdf,.doc,.docx,.jpg,.jpeg" name="file">
                                    <div id="file-name" style="color: black;"></div>
                                  </div>
                                  <span>Allowed:.pdf .doc .docx .jpg .jpeg</span>
                                </div>

                              </div>
                              <div class="row justify-content-end">
                                <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3" id="next-button" type="submit"><span class="pr-1">Next</span> <img src="/images/arrow_right_alt.png" width="10" height="10"></button>
                              </div>
                            </form>
                          </div>
                          <div class="col-md-5">
                            <img src="/images/Online article-pana 1.png">
                          </div>
                        </div>
                      </div>

      

                        
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- Place Order Div Ends Here  -->



    <!-- Subscribe Us page -->
    @include('user.sub')

    <!-- Footer -->
    @include('user.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<script>


// Script to get name of the file

document.getElementById('file-upload').addEventListener('change', handleFileUpload);

function handleFileUpload(event) {
  var file = event.target.files[0];
  document.getElementById('file-name').textContent = file.name;
}


// Script to add and subtract pages
  function subtractPage() {
  var pageCount = parseInt(document.getElementById('pageCountValue').textContent);
  if (pageCount > 0) {
    pageCount--;
    document.getElementById('pageCountValue').textContent = pageCount;
    document.getElementById('pageCount').value = pageCount;
  }
}

function addPage() {
  var pageCount = parseInt(document.getElementById('pageCountValue').textContent);
  pageCount++;
  document.getElementById('pageCountValue').textContent = pageCount;
  document.getElementById('pageCount').value = pageCount;
}
</script>






</body>