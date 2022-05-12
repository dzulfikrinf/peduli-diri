<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mb-2 navbar-search" method="GET" action="/cari">
        @csrf
        <div class="row ">
            <div class="col- ml-2">
                <select onchange="yesnoCheck(this);" class="form-control form-select" type="search" style="font-size: 15px">
                <option value="lokasi">Lokasi</option>
                <option value="jam ">Jam</option>
                <option value="tanggal">Tanggal</option>
                <option value="suhu">Suhu</option>
                </select>
            </div>

            <div class="col-8">
                <div class="input-group">
                    <input name="lokasi" id="iflokasi" class="form-control" type="search" placeholder="Cari berdasarkan lokasi" aria-label="Search" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" id="ifBtnlokasi" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="input-group">
                    <input style="display:none;" name="tanggal" id="iftanggal" class="form-control" type="text" placeholder="Cari berdasarkan tanggal" aria-label="Search" />
                    <div class="input-group-append">
                        <button style="display:none;" class="btn btn-primary" id="ifBtntanggal" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="input-group">
                    <input style="display:none;" name="jam" id="ifjam" class="form-control" type="time" placeholder="Cari berdasarkan jam" aria-label="Search" />
                    <div class="input-group-append">
                        <button style="display:none;" class="btn btn-primary" id="ifBtnjam" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="input-group">
                    <input style="display:none;" name="suhu" id="ifsuhu" class="form-control" type="search" placeholder="Cari berdasarkan suhu" aria-label="Search" />
                    <div class="input-group-append">
                        <button style="display:none;" class="btn btn-primary" id="ifBtnsuhu" type="sub,it">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function yesnoCheck(that) {
          let value = that.value;
    
          if(value == "tanggal"){
            document.getElementById("iftanggal").style.display = "block";
            document.getElementById("ifBtntanggal").style.display = "block";
    
            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifBtnjam").style.display = "none";
    
            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("ifBtnlokasi").style.display = "none";
            
            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifBtnsuhu").style.display = "none";
    
          } else if (value == "lokasi") {
            document.getElementById("iftanggal").style.display = "none";
            document.getElementById("ifBtntanggal").style.display = "none";
    
            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifBtnjam").style.display = "none";
    
            document.getElementById("iflokasi").style.display = "block";
            document.getElementById("ifBtnlokasi").style.display = "block";
            
            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifBtnsuhu").style.display = "none";
    
          } else if (value == "suhu") {
            document.getElementById("iftanggal").style.display = "none";
            document.getElementById("ifBtntanggal").style.display = "none";
    
            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifBtnjam").style.display = "none";
    
            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("ifBtnlokasi").style.display = "none";
            
            document.getElementById("ifsuhu").style.display = "block";
            document.getElementById("ifBtnsuhu").style.display = "block";
    
        } else {
            document.getElementById("iftanggal").style.display = "none";
            document.getElementById("ifBtntanggal").style.display = "none";
    
            document.getElementById("ifjam").style.display = "block";
            document.getElementById("ifBtnjam").style.display = "block";
    
            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("ifBtnlokasi").style.display = "none";
            
            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifBtnsuhu").style.display = "none";
        }
    
    
    }
    </script>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @auth
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fa-solid fa-user"></i>
                @if (!empty (auth()->user()->name))
                {{ auth()->user()->name }}
                @else
                User
                @endif
                </span>
                @endauth
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
