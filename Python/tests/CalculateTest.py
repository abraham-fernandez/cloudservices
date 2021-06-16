import unittest
from Python.classes import Calculate


class MyTestCase(unittest.TestCase):
    def test_CalculatePrice(self):
        self.assertAlmostEqual(0.05, Calculate.getPercentage(2))
        self.assertAlmostEqual(0.10, Calculate.getPercentage(3))
        self.assertAlmostEqual(0.15, Calculate.getPercentage(4))
        self.assertAlmostEqual(0.25, Calculate.getPercentage(5))
        self.assertAlmostEqual(0.30, Calculate.getPercentage(6))
        self.assertAlmostEqual(0.35, Calculate.getPercentage(7))


if __name__ == '__main__':
    unittest.main()
