<div class="form-bottom">
	<form role="form" action="" method="post" class="login-form">
		<div class="form-group">
			<label class="sr-only">Name</label>
		    <input type="text" name="name" placeholder="Name..." class="form-control" required>
		</div>
		<div class="form-group">
			<label class="sr-only">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
		<div class="form-group">
			<label class="sr-only">Date of Birth</label>
		    <input type="date" name="dob" placeholder="DoB..." class="form-control" required>
		</div>
		<div class="form-group">
			<label class="sr-only">Blood Group</label>
            <select name="bg" id="bg" class="form-control">
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
            </select>
		</div>
		<div class="form-group">
			<label class="sr-only">Email</label>
		    <input type="email" name="email" placeholder="Email..." class="form-control" required>
		</div>
		<div class="form-group">
			<label class="sr-only">Mobile</label>
		    <input type="text" name="mobile" placeholder="Mobile..." class="form-control" required>
        </div>
		<div class="form-group">
			 <label class="sr-only">Address</label>
            <textarea name="address" id="address" placeholder="Address..." class="form-control" cols="50" rows="3" required></textarea>
        </div>
        <div class="form-group">
			<label class="sr-only">State</label>
		    <input type="text" name="state" placeholder="State..." class="form-control" required>
        </div>
        <div class="form-group">
			<label class="sr-only">Country</label>
		    <input type="text" name="country" placeholder="Country..." class="form-control" required>
        </div>
        <div class="form-group">
			<label class="sr-only">Pincode</label>
		    <input type="text" name="pincode" placeholder="Pincode..." class="form-control" required>
        </div>
		
		<button type="submit" class="btn">Submit</button>
    </form>
</div>