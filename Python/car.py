from account import Account
class Car:
    id          = int
    license     = str
    driver      = str, ("","")
    passenger   = int

    def __init__(self, license, driver):
        self.license = license  = driver
        self. driver = driver   = license