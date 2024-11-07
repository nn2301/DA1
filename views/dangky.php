<div class="container">
      <h1 class="container-title">Tạo tài khoản</h1>
      <div class="page-login">
        <span class="title-sub">Nếu chưa có tài khoản vui lòng đăng ký tại đây</span>
        <form action="/register" id="create-customer" method="post">
          <div class="main">
            <div class="row">
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="first-name">Họ:</label>
                  <input
                    type="text"
                    name="first-name"
                    id="first-name"
                    class="form-control"
                    placeholder="Nhập họ"
                    required
                  />
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="last-name">Tên:</label>
                  <input
                    type="text"
                    name="last-name"
                    id="last-name"
                    class="form-control"
                    placeholder="Nhập tên"
                    required
                  />
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="email">Email:</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    placeholder="Nhập email"
                    required
                  />
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="password">Mật khẩu:</label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    placeholder="Nhập mật khẩu"
                    required
                  />
                </fieldset>
              </div>
            </div>
          </div>
          <div class="button-group">
            <button type="submit" class="btn btn-primary">Đăng ký</button>
            <a href="dangnhap.html" class="btn-link-style btn-register">Đăng nhập</a>
          </div>
        </form>
      </div>
    </div>

    <div class="social-icons">
      <a href="tel:+123456789" class="icon phone-icon"></a>
      <a href="https://zalo.me/" class="icon zalo-icon"></a>
      <a href="https://messenger.com" class="icon messenger-icon"></a>
      <a href="mailto:info@example.com" class="icon email-icon"></a>
      <a href="https://maps.google.com" class="icon map-icon"></a>
    </div>