<div class="container">
    <h1 class="container-title">Tài khoản</h1>
    <div class="page-login">
      <span class="title-sub">Nếu bạn đã có tài khoản vui lòng đăng nhập tại đây .</span>
      <div class="box">Yêu cầu không hợp lệ, hoặc quá hạn, phiền bạn thử lại</div>
      
      <form action="/register" id="create-customer" method="post">
        <div class="row">
          <!-- Email Group -->
          <div class="email-group">
            <fieldset class="form-group">
              <label for="email">Email:</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                placeholder="email"
                required
              />
            </fieldset>
            
            <fieldset class="form-group">
              <label for="forgot-email">Mật khẩu:</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                placeholder="Mật khẩu"
                required
              />
            </fieldset>
          </div>

          <!-- Info Group (Name and Password) -->
          <div class="info-group">
            <fieldset class="form-group">
                <p class="repas">Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.</p>
              <label for="name">Email:</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                placeholder="Email"
                required
              />
            </fieldset>
            <button type="submit" class="btn btn-repas">Lấy lại mật khẩu</button>
          </div>
        </div>
        
        <div class="button-group">
          <button type="submit" class="btn btn-primary">Đăng ký</button>
          <a href="/login" class="btn-link-style btn-register">Đăng nhập</a>
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