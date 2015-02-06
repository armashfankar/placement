<?php
include "tpomenu.php"; ?>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    
    hr {
margin-top: 20px;
margin-bottom: 20px;
border: 0;
border-top: 1px solid #7C7A7A;
}
</style>

<body>
<div class="container">
    <div id="respond">
       
        <!---UPDATE INFO BLOCK STARTS--->
        <div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Event Details</th>
                     <th></th>
                    </tr>
                </thead>
                 <tbody>
                     <form action="tponews.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Event Name</td>
                        <td><input type="text" class="form-control" name="title" id="inputName"            placeholder="Event Name" value="" required data-validation-required-message="Cannot Be Blank">
                        </td>   <td></td>
                     </tr>
                    <tr class="active">
                        <td>Date</td>
                        <td><input type="date" class="form-control" name="date" id="date"      required data-validation-required-message="Cannot Be Blank">
                        </td>   <td></td>
                     </tr>
                    <tr class="danger">
                        <td>Description</td>
                        <td><textarea row"5" name="description"></textarea>
                        </td>  <td></td>
                    </tr>

                    <tr class="success">
                        <td>Venue</td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Enter venue" name="venue" value="" required data-validation-required-message="Cannot Be Blank">
                        </td>   <td></td>

                     </tr>
                    
                    <tr class="info">
                        <td>Contact</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="COntact Details" name="contact" value="" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr> 
                    <tr class="warning">
                        <td>Email</td>
                       <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Email" name="email" value="email" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr>
                         
                    <tr class="info">
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-action">Submit</button>
                        </td>
                    </tr>
                    </form>
                </tbody></div></div></div>
            </table>
        </div>
    </div>
</div>
        

</body>
<?php include "../foot.html"; ?>