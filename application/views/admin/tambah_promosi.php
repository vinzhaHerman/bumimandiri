<!DOCTYPE html>
<html lang="en">



    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo base_url() ?>Admin/profile">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('admin/logout') ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">





          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">+ Tambah Promosi</h4>
              <p class="card-category">Created using Roboto Font Family</p>
            </div>
            <div class="card-body">
              <?php echo form_open_multipart('Admin/set_promosi');?>
                <input type="text" class="form-control" name="kode" value="<?php  ?>" >
                <input type="file" name="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label> 
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <div id="typography">
                <div class="card-title">
                  <h3>Post title:</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="judul" class="form-control">
                      </div>
                    </div>
                </div>
                  <div class="card-title">
                    <h3>Post Paragraph:</h3>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea name="para"></textarea>
                  </div>
                </div>
                </form>
                <button type="submit" class="btn btn-primary pull-right"><b>Publish</b></button>
                <a class="btn pull-right">Batal</a>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>






        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
          </div>
        </div>
      </footer>
    </div>
  </div>

