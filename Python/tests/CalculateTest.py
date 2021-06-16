import unittest
from Python.classes import Calculate


class MyTestCase(unittest.TestCase):
    def test_get_percentage(self):
        self.assertAlmostEqual(0.05, Calculate.getPercentage(2))
        self.assertAlmostEqual(0.10, Calculate.getPercentage(3))
        self.assertAlmostEqual(0.15, Calculate.getPercentage(4))
        self.assertAlmostEqual(0.25, Calculate.getPercentage(5))
        self.assertAlmostEqual(0.30, Calculate.getPercentage(6))
        self.assertAlmostEqual(0.35, Calculate.getPercentage(7))

    def test_calculate_price(self):
        selection = {"Service1": 1, "Service2": 2, "Service3": 2, "Service4": 2, "Service5": 2, "Service6": 1};
        actual = Calculate.calculatePrice(selection, 8);
        self.assertAlmostEqual(60.80, actual)

    def test_calculate_price_other_combination(self):
        selection = {"Service1": 2, "Service2": 2, "Service3": 2, "Service4": 2, "Service5": 2};
        actual = Calculate.calculatePrice(selection, 8);
        self.assertAlmostEqual(60, actual)


if __name__ == '__main__':
    unittest.main()
