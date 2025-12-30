 @extends('layout.erp.app')



 @section("content")
<div class="container mt-4 align-middle">
  <div class="card adminuiux-card mb-4">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="h6">Standard Floating labels</p>
                                    </div>
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-outline-theme btn-square" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false">
                                            <i class="bi bi-code-slash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="form-floating mb-3 ">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                            </div>
                            <div class="collapse" id="collapse1">
                                <div class="card-footer border-top">
                                    <div class="bg-dark text-white p-2 rounded my-2">
                                        <pre class="mb-2"><code class="code rounded language-html">
            &lt;div class="form-floating mb-3"&gt;
                &lt;input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"&gt;
                &lt;label for="floatingInput"&gt;Email address&lt;/label&gt;
            &lt;/div&gt;

            &lt;div class="form-floating"&gt;
                &lt;input type="password" class="form-control" id="floatingPassword" placeholder="Password"&gt;
                &lt;label for="floatingPassword"&gt;Password&lt;/label&gt;
            &lt;/div&gt;

            &lt;div class="form-floating"&gt;
                &lt;textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"&gt;&lt;/textarea&gt;
                &lt;label for="floatingTextarea"&gt;Comments&lt;/label&gt;
            &lt;/div&gt;

            &lt;div class="form-floating"&gt;
                &lt;select class="form-select" id="floatingSelect" aria-label="Floating label select example"&gt;
                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                    &lt;option value="1"&gt;One&lt;/option&gt;
                    &lt;option value="2"&gt;Two&lt;/option&gt;
                    &lt;option value="3"&gt;Three&lt;/option&gt;
                &lt;/select&gt;
                &lt;label for="floatingSelect"&gt;Works with selects&lt;/label&gt;
            &lt;/div&gt;
            </code></pre>
                                        <button type="button" class="btn btn-outline-light  btn-square copycode"><i class="bi bi-clipboard"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    
             @endsection
