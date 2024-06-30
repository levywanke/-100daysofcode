# Solidity

## Introduction

Solidity is a statically-typed programming language designed for developing smart contracts that run on the Ethereum Virtual Machine (EVM). It is influenced by C++, Python, and JavaScript and is used to create contracts for voting, crowdfunding, blind auctions, multi-signature wallets, and more.

## Features

- **Statically Typed**: Solidity requires variables to be declared with their data types.
- **Contract-Oriented**: Designed specifically for writing smart contracts.
- **Inheritance**: Supports multiple inheritance with C3 Linearization.
- **Libraries**: Allows the use of reusable code libraries.
- **User-Defined Types**: Supports structs and enums.
- **Access Control**: Visibility specifiers for functions and state variables.

## Basic Syntax

### Pragma Directive

Every Solidity file should start with a pragma directive, which specifies the compiler version.

```solidity
pragma solidity ^0.8.0;
```

### Contract

A contract in Solidity is similar to a class in object-oriented languages.

```solidity
contract SimpleStorage {
    uint256 storedData;

    function set(uint256 x) public {
        storedData = x;
    }

    function get() public view returns (uint256) {
        return storedData;
    }
}
```

### Data Types

- **Boolean**: `bool`
- **Integer**: `int`, `uint` (supports various sizes from 8 to 256 bits)
- **Address**: `address`
- **Fixed-Point Numbers**: `fixed`, `ufixed` (not fully supported yet)
- **Bytes**: `bytes`, `bytes1` to `bytes32`
- **String**: `string`
- **Structs**: Custom defined types
- **Arrays**: Static and dynamic arrays

### Functions

- **Public Functions**: Accessible from anywhere.
- **Private Functions**: Accessible only within the contract.
- **Internal Functions**: Accessible within the contract and derived contracts.
- **External Functions**: Accessible only externally (not within the contract).

```solidity
function add(uint256 a, uint256 b) public pure returns (uint256) {
    return a + b;
}
```

### Events

Events are used to notify the calling application about the occurrence of certain events.

```solidity
event StoredDataSet(uint256 data);

function set(uint256 x) public {
    storedData = x;
    emit StoredDataSet(x);
}
```

### Modifiers

Modifiers are used to change the behavior of functions.

```solidity
modifier onlyOwner() {
    require(msg.sender == owner, "Not owner");
    _;
}

function set(uint256 x) public onlyOwner {
    storedData = x;
}
```

## Getting Started

1. **Install Solidity Compiler**: You can use Remix, a web-based IDE, or install solc, the command line compiler.
2. **Write a Contract**: Create a `.sol` file and write your smart contract.
3. **Compile**: Compile your contract to check for errors.
4. **Deploy**: Deploy your contract to the Ethereum blockchain.
5. **Interact**: Interact with your deployed contract through a web3 interface or using tools like Remix or Truffle.

## Tools

- **Remix IDE**: A web-based Solidity IDE.
- **Truffle**: A development framework for Ethereum.
- **Ganache**: A personal blockchain for Ethereum development.
- **Metamask**: A browser extension for interacting with the Ethereum blockchain.

## Resources

- [Solidity Documentation](https://docs.soliditylang.org/)
- [Solidity GitHub Repository](https://github.com/ethereum/solidity)
- [Ethereum.org](https://ethereum.org/)

