<?php
# @namespace Sami\Base
# The main scope for a SamiBase component
# wich should be used in the current scope
# as it self is.
namespace Sami\Base {
  use Sami\Base\Data\Fake;
  use Sami\Base\Data\Faker;
  # TauzRapFactory Factory
  # This is a way to organize
  # a little flux for creating
  # seeds inside the database.
  # The SamiBase name conventions
  # allow it self to auto configure
  # the database factoris and make each
  # one know the model that should be
  # pointed for the same.
  # EG: The curreent Factory (TauzRapFactory[Factory])
  # with automatically point to a User model.
  Factory::Define ('TauzRapFactory', function (Faker $faker) {
    # Create a fake random TauzRapFactory,
    # by an instance of 'Fake'
    # class;
    # it should be an array containg
    # the TauzRapFactory datas.
    $tauzrap = new Fake ();

    # return the fake data on
    # condition that a Factory
    # returns an object model.
    return $tauzrap;
  });
}
