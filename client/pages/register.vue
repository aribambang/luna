<template>
  <div class="container col-md-6 mt-5">
    <h2>Register</h2>
    <br />
    <form>
      <div class="form-group">
        <label>Fullname</label>
        <input type="text" class="form-control" placeholder="Enter your name" />
        <small class="form-text text-danger">Errors here.</small>
      </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" placeholder="Enter email" />
        <small class="form-text text-danger">Errors here.</small>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input
          type="password"
          class="form-control"
          placeholder="Enter password"
        />
        <small class="form-text text-danger">Errors here.</small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br />
    <p>Already have an account? <nuxt-link to="/login">Login </nuxt-link></p>
  </div>
</template>
