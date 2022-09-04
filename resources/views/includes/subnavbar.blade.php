<div class="container-fluid bg-dark subnavbar" data-aos="fade-up">
    <div class="container bg-dark">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6">
                <div class="row category-list">
                    <div class="col-2 text-light category"><a href="{{ route('lastest') }}">Lastest</a></div>
                    <div class="col-2 text-light category"><a href="{{ route('oldest') }}">Oldest</a></div>
                </div>
            </div>
            <div class="col-5 col-md-2 mx-auto mx-md-0 mt-4 mt-md-0">
                <form action="">
                    <div class="input-group">
                        <span class="input-group-text bg-white" id="basic-addon1">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="basic-addon1" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
