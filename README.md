# SOLID Open/Closed Principle sample with PHP
###### _In this repository you can see a sample of a little PHP project with Open/Closed SOLId principle, and the inverse, without that._

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

### Sample Context
###### The project simulates a Payroll. Here we have two types of employees, effective (ClT) and intern. The permanent employee has a salary in his payment, and the intern has an internship grant.
###### In the sample without OCP, the Payroll class must check the employee type and manage it. Imagine that this need includes another type of employee. this hurts the principle, because you will need to change the class for this new behavior.
###### In another example, applying the OCP, we can include other types of employees, without changing the Payroll class.

### To create it, we use:

- :elephant: PHP 7.4 :elephant:
- :whale: Docker :whale:
- :chart: TDD :chart:

## Get Started

- We have two branches. One with the principle applied, and another without that.
- Make a git clone of the project at your chosen branch.

- Up the containers with Docker, run:
   ```sh
        docker-compose up -d --build
   ```
- The branch that have the applied principle, have automated tests. Do this to run:
    ```sh
        docker exec -it "container_name" bash
    ```
- Make sure your actual folder is "html". if not, run:
    ```sh
        cd html
    ```
- To finally execute tets, run:
    ```sh
        ./vendor/bin/phpunit Tests/PayrollTest.php
    ```

#### Development

##### Want to contribute? Great!

This project can grow even more with your contribution! 
Suggestions are always welcome!


## License

MIT

**Free Software, Hell Yeah!**
