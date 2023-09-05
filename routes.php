<?php

use App\Path\Route;
use Auth\AuthAccount;
use Home\HomeController;
use Page\PageController;
use Error\ErrorController;



Route::get("page/{slug}", [PageController::class, "Index"]);

Route::get("pages/{pagination}", [PageController::class, "List"]);
Route::get("pages/", [PageController::class, "List"]); // pagination needs two...

Route::get("page/new", [PageController::class, "Create"], [[AuthAccount::class, "loggedin"]]);
Route::post("page/new", [PageController::class, "Store"], [[AuthAccount::class, "loggedin"]]);
Route::get("page/edit/{slug}", [PageController::class, "Edit"], [[AuthAccount::class, "deny"]]);
Route::post("page/edit/{slug}", [PageController::class, "Update"], [[AuthAccount::class, "loggedin"]]);
Route::get("page/delete/{id}", [PageController::class, "Delete"], [[AuthAccount::class, "owner"],[AuthAccount::class, "loggedin"]]);
Route::post("page/delete/{id}", [PageController::class, "Destroy"], [[AuthAccount::class, "loggedin"]]);

Route::get("page/delete/{id}/{test}", [PageController::class, "Delete"]);


/**
 * These routes are mandatory. Things will break
 * if you remove these...
 */

Route::get("/", [HomeController::class, "Index"]);
Route::get("404", [ErrorController::class, "notFound"]);
Route::get("403", [ErrorController::class, "forbidden"]);