import numpy as np


def getPercentage(numServices):
    percentageInit = 0.05
    return (percentageInit * numServices) - percentageInit if numServices < 5 else percentageInit * numServices


def calculatePrice(selection, priceLicense):
    total = 0
    numServices = len(selection)
    numLicences = np.sum(selection)
    combinations = []

    combinations[numServices] = (numLicences // numServices)
    combinations[numLicences % numServices] = 1

    for numLicense, repetitions in enumerate(combinations):
        total += repetitions * ((numLicense * priceLicense) * (1 - getPercentage(numLicense)))

    return total
