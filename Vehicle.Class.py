class Vehicle:
  def __init__(self, make, model, year, color, doors=4, miles=0):
      self.__hp = None
      self.__torque = None
      self.color = color
      self.__miles = miles
      self.__make = make
      self.__model = model
      self.__year = year
      self.__doors = doors
      self.__fuel = None
      self.__transmission = None
      self.category = None
      self.__mileage_log = [(0, "Initial Mileage")]
      self.options = [
          "Power Windows",
          "Power Doors",
          "Power Steering",
          "Floor Mats",
          "12 Volt Outlet"
      ]
      self.add_mileage_entry(miles, "Initial Miles Entry")

  def get_hp(self):
      return self.__hp

  def get_torque(self):
      return self.__torque

  def get_color(self):
      return self.color

  def get_miles(self):
      return self.__miles

  def get_make(self):
      return self.__make

  def get_model(self):
      return self.__model

  def get_year(self):
      return self.__year

  def get_doors(self):
      return self.__doors

  def get_fuel(self):
      return self.__fuel

  def get_transmission(self):
      return self.__transmission

  def get_category(self):
      return self.category

  def get_mileage_log(self):
      return self.__mileage_log

  def add_mileage_entry(self, miles, description):
      self.__mileage_log.append((miles, description))

  def get_options(self):
      return self.options

  def set_hp(self, hp):
      self.__hp = hp

  def set_torque(self, torque):
      self.__torque = torque

  def add_miles(self, miles):
      self.__miles += miles

  def set_doors(self, doors):
      self.__doors = doors

  def set_fuel(self, fuel):
      self.__fuel = fuel

  def set_transmission(self, transmission):
      self.__transmission = transmission

  def set_category(self, category):
      self.category = category

  def add_option(self, option):
      self.options.append(option)

  def del_option(self, option):
      if option in self.options:
          self.options.remove(option)


bob_vehicle = Vehicle("Jeep", "Gladiator", "2021", "Snazzleberry", 4, 35500)

bob_vehicle.set_hp(320)
bob_vehicle.set_torque(410)
bob_vehicle.set_transmission("Automatic")
bob_vehicle.set_fuel("Diesel")

print(bob_vehicle.get_hp())
print(bob_vehicle.get_torque())
print(bob_vehicle.get_transmission())
print(bob_vehicle.get_fuel())

bob_vehicle.add_option("Diesel")
bob_vehicle.add_option("Android Auto")

bob_vehicle.del_option("Floor Mats")

print(bob_vehicle.options)