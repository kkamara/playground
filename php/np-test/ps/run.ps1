. "$pwd\ps\functions"

switch($args[0]) {
    dev {
        Invoke-Dev
    }
    default {}
}
