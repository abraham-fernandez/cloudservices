import numpy as np


def getPercentage(numServices):
    percentageInit = 0.05
    return (percentageInit * numServices) - percentageInit if numServices < 5 else percentageInit * numServices


def calculatePrice(selection, priceLicense):
    total = 0
    numServices = len(selection)
    numLicences = sum(selection.values())
    combinations = {}


    combinations[numServices] = (numLicences // numServices)
    combinations[numLicences % numServices] = 1

    for repetitions,numLicense in enumerate(combinations):
        total += combinations[numLicense] * ((numLicense * priceLicense) * (1 - getPercentage(numLicense)))

    return total
