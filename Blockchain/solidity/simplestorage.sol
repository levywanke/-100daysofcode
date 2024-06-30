pragma solidity ^0.8.0;

// Define a contract named 'SimpleStorage'
contract SimpleStorage {
    // Declare a state variable of type uint256 to store a number
    uint256 private storedData;

    // Function to set the value of the state variable 'storedData'
    // 'public' visibility allows this function to be called from outside the contract
    function set(uint256 x) public {
        storedData = x;
    }

    // Function to get the value of the state variable 'storedData'
    // 'public' visibility allows this function to be called from outside the contract
    // 'view' indicates that this function does not modify the state
    // 'returns' specifies the return type of the function
    function get() public view returns (uint256) {
        return storedData;
    }
}

