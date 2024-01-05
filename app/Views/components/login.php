<section id="login">
    <div class="container bg-secondary w-25 h-100 d-flex flex-column 
        justify-content-center align-items-center my-5 p-5">
        <h4 class="text text-dark">Login</h4>
        <form>
            <div class="form-group my-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-2">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="form-check my-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="form-alert mt-2 text-center">
                <small id="authAlert" class="form-text text-danger">Login failed!</small>
            </div>  
        </form>
    </div>
</section>