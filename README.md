This repository demonstrates a common PHP bug related to default parameter handling. The `bug.php` file contains code that incorrectly handles null values passed as arguments. The `bugSolution.php` file provides a corrected version that addresses this issue.  The problem arises from the loose typing of PHP and the failure to differentiate between a missing parameter and a user intentionally passing null.  The solution enhances the function to clearly handle both cases separately.