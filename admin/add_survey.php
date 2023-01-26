<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<div class="container survey">
  <h1 id="title" class="text-center">Survey Form</h1>
  <p id="description" class="text-center">A simple bootstrap survey example</p>

<form id="survey-form">
 <div class="form-row">
    <div class="col">
      <label id="name-label">First Name</label>
      <input id="name" type="name" class="form-control" placeholder="First name" required>
    </div>
    <div class="col">
      <label for="formGroupExampleInput">Last Name</label>
      <input id="last-name" type="name" class="form-control" placeholder="Last name" required>
    </div>
  </div>
  <br/>
  <div class="form-group">
    <label id="email-label">Email address</label>
    <input id="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label id="number-label">Your age</label>
    <input id="number" type="number" min="15" max="125" class="form-control" id="number" placeholder="Age" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Qualification</label>
    <select class="form-control" id="dropdown">
      <option>Primary Education</option>
      <option>Secondary Eduction</option>
      <option>Bachelors Degree</option>
      <option>Masters</option>
      <option>PHd</option>
    </select>
  </div>
  <div class="radiobuttons">
  <p>Whats Better?</p>
    <ul style="list-style: none;">
     <li class="radio"><input name="radio-buttons" value="3"  type="radio" class="userRatings" ><label>Front-End</label></li>
      <li class="radio"><input name="radio-buttons" value="3"  type="radio" class="userRatings" ><label>Back-End</label></li>
    </ul>
  </div>
 <div>
  <p >What would you like us to change?</p><ul class="checkboxlabel">
    <li class="checkbox" style="list-style: none;"><label> <input name="prefer" value="1" type="checkbox" class="userRatings">Front-end Projects</label></li>
  <li class="checkbox" style="list-style: none;"><label> <input name="prefer" value="1" type="checkbox" class="userRatings">Back-end Projects</label></li>
  <li class="checkbox" style="list-style: none;"><label> <input name="prefer" value="1" type="checkbox" class="userRatings">Website Layout</label></li>
  <li class="checkbox" style="list-style: none;"><label> <input name="prefer" value="1" type="checkbox" class="userRatings">Easier challenges</label></li>
    </ul>
  </div>
  <div class="message">
    <p>Message to us</p>
  <textarea name="comment" id="comments" cols="30" rows="5" placeholder="What would you like to tell us?" optional></textarea>
  </div>
  <br/>
  <div>
  <button id="submit" type="submit" class="btn btn-secondary" style="float:right">Submit</button>
  </div>
</form>
  <div>
  <footer>
    <h3 style="color:black;">Made by Jeet Gohil <a href="https://www.freecodecamp.org/jeetgohil"class="fab fa-free-code-camp"></a>
</h3>
  </footer>
    </div>
