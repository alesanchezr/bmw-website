# BMW Website

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io#https://github.com/alesanchezr/bmw-website)

## Installation Procedure

1. Clone the repo
2. Run composer
3. Install wordpress via WordPress CLI
4. Install NPM Packages
5. Run: $ npm build

Replace strings on the db
```sh
$ wp search-replace <string2> <string1>
```

Create user:
```sh
$ wp user create alesanchezr alejandro@bestmiamiweddings.com --role=administrator --user_pass=1234
```
