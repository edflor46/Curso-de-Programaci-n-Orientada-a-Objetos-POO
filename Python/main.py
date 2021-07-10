from account import Account
from car import Car

if __name__ == "__main__":
    
    car = Car("AMS234", Account("Eduardo Flores", "EDFLOR789"))
    print(vars(car))
    print(vars(car.driver))