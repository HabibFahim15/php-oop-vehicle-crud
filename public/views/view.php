<?php


require_once '../../app/classes/VehicleManager.php';
$vehicleManager = new VehicleManager("", "", "", "");
$vehicles = $vehicleManager->getVehicles();

$id = $_GET['id'] ?? null;

if ($id === null) {
    header("Location: ../index.php");
    exit;
}

$vehicles = $vehicleManager->getVehicles();

$vehicle = $vehicles[$id] ?? null;

if (!$vehicle === null) {
    header("Location: ../index.php");
    exit;
}

include './header.php';

?>

<div style=" background-color: #dae7f3ff;" class="py-5">
    <div class="container py-5">

        <div class="card shadow-lg border-0 rounded-4 mx-auto" style="max-width: 34rem;">

            <img src="<?= htmlspecialchars($vehicle['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($vehicle['name']) ?>">

            <div class="card-body p-4">

                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <strong class="text-muted">Name:</strong>
                        <span class="fs-4 fw-bold"><?= htmlspecialchars($vehicle['name']) ?></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong class="text-muted">Type:</strong>
                        <span class="fs-5"><?= htmlspecialchars($vehicle['type']) ?></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong class="text-muted">Price:</strong>
                        <span class="fs-3 fw-bolder text-primary">$<?= htmlspecialchars($vehicle['price']) ?></span>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-primary btn-lg fw-semibold">Buy Now</a>
                    <a href="#" class="btn btn-outline-dark btn-lg fw-semibold">Add to Cart 🛒</a>
                </div>
            </div>
        </div>

    </div>
</div>