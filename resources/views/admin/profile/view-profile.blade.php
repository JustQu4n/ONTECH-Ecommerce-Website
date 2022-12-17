@extends('layout.homelayout')
@section('content')
 <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Clients</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Clients
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="row">
            <div class="col-xxl-9 col-lg-8">
              <div class="client-profile-wrapper mb-30">
                <div class="client-cover">
                  <img
                    src="assets/images/clients/clients-cover.jpg"
                    alt="cover-image"
                  />
                  <div class="update-image">
                    <input type="file" />
                    <label for=""
                      ><i class="lni lni-camera"></i> Edit Cover Photo
                    </label>
                  </div>
                </div>
                <div class="client-profile-photo">
                  <div class="image">
                    <img
                      src="assets/images/clients/client-profile.png"
                      alt="profile"
                    />
                    <div class="update-image">
                      <input type="file" />
                      <label for=""><i class="lni lni-camera"></i></label>
                    </div>
                  </div>
                  <div class="profile-meta text-center pt-25">
                    <h5 class="text-bold mb-10">John Doe</h5>
                    <p class="text-sm">Web & UI/UX Design</p>
                  </div>
                </div>
                <div class="client-info">
                  <h5 class="text-bold mb-15">About Me</h5>
                  <p class="text-sm mb-20">
                    Hello there, I am an expert Web & UI/UX Designer. I am a
                    full-time Freelancer and my passion is to satisfy my buyers
                    by giving 100% best quality work. I will Design Landing
                    page, UI/UX Design, web template design E-mail template
                    design Flyer Design, All Print Media Design, etc..
                    <a href="#0" class="text-medium text-dark">[Read More]</a>
                  </p>

                  <h5 class="text-bold mb-15">UI Designer at</h5>
                  <p class="text-sm text-medium mb-20">UIdeck</p>

                  <ul class="socials">
                    <li>
                      <a href="#0"><i class="lni lni-facebook-filled"></i></a>
                    </li>
                    <li>
                      <a href="#0"><i class="lni lni-twitter-filled"></i></a>
                    </li>
                    <li>
                      <a href="#0"><i class="lni lni-instagram-filled"></i></a>
                    </li>
                    <li>
                      <a href="#0"><i class="lni lni-behance-original"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-xxl-3 col-lg-4">
              <div class="row">
                <div class="col-sm-6 col-lg-12">
                  <div class="icon-card mb-30">
                    <div class="icon purple">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">New Order</h6>
                      <h3 class="text-bold">30</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-12">
                  <div class="icon-card mb-30">
                    <div class="icon success">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">Completed Orders</h6>
                      <h3 class="text-bold">2K+</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-12">
                  <div class="icon-card mb-30">
                    <div class="icon primary">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">Cancelled Order</h6>
                      <h3 class="text-bold">755</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-12">
                  <div class="icon-card mb-30">
                    <div class="icon orange">
                      <i class="lni lni-star"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">Positive Rating</h6>
                      <h3 class="text-bold">1.2K</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->

          <div class="row">
            <div class="col-lg-12">
              <div class="card-style clients-table-card mb-30">
                <div
                  class="title d-flex justify-content-between align-items-center"
                >
                  <h6 class="mb-10">Clients</h6>
                  <div class="more-btn-wrapper">
                    <button
                      class="more-btn dropdown-toggle"
                      id="moreAction"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="lni lni-more-alt"></i>
                    </button>
                    <ul
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="moreAction"
                    >
                      <li class="dropdown-item">
                        <a href="#0" class="text-gray">Mark as Read</a>
                      </li>
                      <li class="dropdown-item">
                        <a href="#0" class="text-gray">Reply</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="table-wrapper table-responsive">
                  <table class="table clients-table">
                    <thead>
                      <tr>
                        <th><h6>#</h6></th>
                        <th><h6>Name</h6></th>
                        <th><h6>Email</h6></th>
                        <th><h6>Project</h6></th>
                        <th><h6>Status</h6></th>
                        <th><h6>Action</h6></th>
                      </tr>
                      <!-- end table row-->
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="employee-image">
                            <img src="assets/images/lead/lead-1.png" alt="" />
                          </div>
                        </td>
                        <td class="min-width">
                          <p>Esther Howard</p>
                        </td>
                        <td class="min-width">
                          <p><a href="#0">yourmail@gmail.com</a></p>
                        </td>
                        <td class="min-width">
                          <p>Admin Dashboard Design</p>
                        </td>
                        <td>
                          <span class="status-btn active-btn">Active</span>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                              <i class="lni lni-trash-can"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <!-- end table row -->
                      <tr>
                        <td>
                          <div class="employee-image">
                            <img src="assets/images/lead/lead-2.png" alt="" />
                          </div>
                        </td>
                        <td class="min-width">
                          <p>John Doe</p>
                        </td>
                        <td class="min-width">
                          <p><a href="#0">yourmail@gmail.com</a></p>
                        </td>
                        <td class="min-width">
                          <p>Dashboard Design</p>
                        </td>
                        <td>
                          <span class="status-btn success-btn">Done</span>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                              <i class="lni lni-trash-can"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <!-- end table row -->
                      <tr>
                        <td>
                          <div class="employee-image">
                            <img src="assets/images/lead/lead-3.png" alt="" />
                          </div>
                        </td>
                        <td class="min-width">
                          <p>Anee Smith</p>
                        </td>
                        <td class="min-width">
                          <p><a href="#0">yourmail@gmail.com</a></p>
                        </td>
                        <td class="min-width">
                          <p>Bootstrap Template</p>
                        </td>
                        <td>
                          <span class="status-btn active-btn">Active</span>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                              <i class="lni lni-trash-can"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <!-- end table row -->
                      <tr>
                        <td>
                          <div class="employee-image">
                            <img src="assets/images/lead/lead-4.png" alt="" />
                          </div>
                        </td>
                        <td class="min-width">
                          <p>Jonathon</p>
                        </td>
                        <td class="min-width">
                          <p><a href="#0">yourmail@gmail.com</a></p>
                        </td>
                        <td class="min-width">
                          <p>React Template</p>
                        </td>
                        <td>
                          <span class="status-btn warning-btn">Pending</span>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                              <i class="lni lni-trash-can"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <!-- end table row -->
                      <tr>
                        <td>
                          <div class="employee-image">
                            <img src="assets/images/lead/lead-5.png" alt="" />
                          </div>
                        </td>
                        <td class="min-width">
                          <p>David Smith</p>
                        </td>
                        <td class="min-width">
                          <p><a href="#0">yourmail@gmail.com</a></p>
                        </td>
                        <td class="min-width">
                          <p>Tailwindcss Template</p>
                        </td>
                        <td>
                          <span class="status-btn close-btn">Close</span>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                              <i class="lni lni-trash-can"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <!-- end table row -->
                      <tr>
                        <td>
                          <div class="employee-image">
                            <img src="assets/images/lead/lead-6.png" alt="" />
                          </div>
                        </td>
                        <td class="min-width">
                          <p>Anna Smith</p>
                        </td>
                        <td class="min-width">
                          <p><a href="#0">yourmail@gmail.com</a></p>
                        </td>
                        <td class="min-width">
                          <p>Admin Dashboard Design</p>
                        </td>
                        <td>
                          <span class="status-btn active-btn">Active</span>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                              <i class="lni lni-trash-can"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <!-- end table row -->
                    </tbody>
                  </table>
                  <!-- end table -->
                </div>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
@endsection