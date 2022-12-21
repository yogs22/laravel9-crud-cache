  <!-- Desktop Menu -->
  <section class="sidebar">
    <div class="content pt-50 pb-30 ps-30">
      <div class="user text-center pb-50 pe-30">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" width="120" height="120" class="img-fluid img-rounded mb-20">
        <h2 class="fw-bold text-xl color-palette-1 m-0">
          {{ 'Welcome' }}
        </h2>
        <p class="color-palette-1 m-0">
          {{ auth()->user()->name }} 👋
        </p>
      </div>
      <div class="menus">
          <a href={{ route('article.index') }} class="text-lg text-decoration-none">
          <div id="dashboard" class="item mb-30 active">
            <svg
              class="icon me-3"
              width="25"
              height="25"
              viewBox="0 0 25 25"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M21.9033 14.7502H14.9033V21.7502H21.9033V14.7502Z"
                stroke="#7E8CAC"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M10.9033 14.7502H3.90332V21.7502H10.9033V14.7502Z"
                stroke="#7E8CAC"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M21.9033 3.75024H14.9033V10.7502H21.9033V3.75024Z"
                stroke="#7E8CAC"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M10.9033 3.75024H3.90332V10.7502H10.9033V3.75024Z"
                stroke="#7E8CAC"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
            <p class="item-title m-0">Article</p>
          </div>
        </a>
        <a class="text-lg text-decoration-none" style="cursor:pointer" href="{{ route('auth.logout') }}">
          <div class="item mb-30">
            <svg
              class="icon me-3"
              width="25"
              height="25"
              viewBox="0 0 25 25"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.2634 7.05396C20.5218 8.31274 21.3787 9.9164 21.7257 11.6621C22.0728 13.4079 21.8944 15.2173 21.2131 16.8617C20.5318 18.5061 19.3782 19.9115 17.8983 20.9003C16.4183 21.8891 14.6783 22.4169 12.8984 22.4169C11.1185 22.4169 9.37859 21.8891 7.89861 20.9003C6.41864 19.9115 5.26508 18.5061 4.58381 16.8617C3.90253 15.2173 3.72413 13.4079 4.07116 11.6621C4.41819 9.9164 5.27506 8.31274 6.53344 7.05396"
                stroke="#7E8CAC"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M12.9033 2.41406V12.4141"
                stroke="#7E8CAC"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
            <p class="item-title m-0">Log Out</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- Mobile / Tablet Menu -->
  <nav class="navbar navbar-light bg-white navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom">
    <ul class="navbar-nav nav-justified w-100">
      <li class="item nav-item text-center active">
        <a href={{ route('article.index') }} class="nav-link">
          <svg
            class="icon"
            width="25"
            height="25"
            viewBox="0 0 25 25"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M21.9033 14.7502H14.9033V21.7502H21.9033V14.7502Z"
              stroke="#7E8CAC"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10.9033 14.7502H3.90332V21.7502H10.9033V14.7502Z"
              stroke="#7E8CAC"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M21.9033 3.75024H14.9033V10.7502H21.9033V3.75024Z"
              stroke="#7E8CAC"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10.9033 3.75024H3.90332V10.7502H10.9033V3.75024Z"
              stroke="#7E8CAC"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <span class="small d-block">Article</span>
        </a>
      </li>
      <li class="item nav-item text-center">
        <a href="{{ route('auth.logout') }}" class="nav-link">
          <svg
            class="icon"
            width="25"
            height="25"
            viewBox="0 0 25 25"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M19.2634 7.05396C20.5218 8.31274 21.3787 9.9164 21.7257 11.6621C22.0728 13.4079 21.8944 15.2173 21.2131 16.8617C20.5318 18.5061 19.3782 19.9115 17.8983 20.9003C16.4183 21.8891 14.6783 22.4169 12.8984 22.4169C11.1185 22.4169 9.37859 21.8891 7.89861 20.9003C6.41864 19.9115 5.26508 18.5061 4.58381 16.8617C3.90253 15.2173 3.72413 13.4079 4.07116 11.6621C4.41819 9.9164 5.27506 8.31274 6.53344 7.05396"
              stroke="#7E8CAC"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M12.9033 2.41406V12.4141"
              stroke="#7E8CAC"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <span class="small d-block">Logout</span>
        </a>
      </li>
    </ul>
  </nav>
