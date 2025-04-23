    <h2>FizzBuzz</h2>
        <h3 id="greeting">Welcome to Jazzy Tiger</h3>
        <p>Fill out the form, and then click the submit button.</p>

        <form id="name-form">
            <fieldset id="lengthy-fieldset">
            <p class="form-p"><strong>Enter your Name:</strong></p>
				<label for="first-name">First Name: 
				<input type="text" id="first-name" placeholder="Master" required="required"></label>


                <label for="middle-initial">Middle Initial:</label>
                <input type="text" id="middle-initial" maxlength="1" placeholder="">

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" placeholder="Tigress" required="required">
                
                <p class="form-p"><strong>Choose Divisors:</strong></p>
                <label for="divisor-1">First Divisor:</label>
                <input type="number" id="divisor-1" placeholder="5" required="required">

                <label for="divisor-2">Second Divisor:</label>
                <input type="number" id="divisor-2" placeholder="7" required="required">

                <label for="divisor-3">Third Divisor:</label>
                <input type="number" id="divisor-3" placeholder="11" required="required">
                <p class="form-p"><strong>Choose three words:</strong></p>
				<label for="first-word">First Word: 
                    <input type="text" id="first-word" placeholder="Jazzy" required="required"></label>
    
    
                    <label for="second-word">Second Word:</label>
                    <input type="text" id="second-word" placeholder="Tiger" required="required">
    
                    <label for="third-word">Third Word:</label>
                    <input type="text" id="third-word" placeholder="Stripes" required="required">
                    <p class="form-p"><strong>How high do you want to count?</strong></p>
                    <label for="total-count">Count to:</label>
                    <input type="number" id="total-count" placeholder="111" required="required">
                    <div class="button-container">
                <br><button type="submit">Submit</button>
                <button type="button" id="clear">Clear</button>
                     </div>
                    </fieldset>
        </form>
<div id="output">
    <div id="output-box">
        <ul id="fizz-buzz-list"></ul>
    </div>
</div>
        <script src="scripts/fizzbuzz.js"></script>

