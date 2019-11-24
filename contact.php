<form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sname">Surname</label>
                                <input type="text" class="form-control" name="sname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tel">Telephone</label>
                                <input type="text" class="form-control" name="tel">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="interest">Interested In ?</label>
                                <select class="form-control" name="interest" id="interest">
                                    <option selected>--None--</option>
                                    <option value="tech">Technical Support</option>
                                    <option value="web">Web Support</option>
                                    <option value="sales">Sales Support</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sname">Where did you hear about us?</label>
                                <select class="form-control" name="where" id="where">
                                    <option selected>--None--</option>
                                    <option value="google">Google</option>
                                    <option value="friends">Friends</option>
                                    <option value="referal">Refferal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="comment">How can we Help?</label>
                                <textarea name="comment" class="form-control" id="comment" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button><br><br>
                </form>