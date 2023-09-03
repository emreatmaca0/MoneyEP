<?=$this->extend('default_dashboard')?>
<?=$this->section('dash_content')?>

<div style="display: flex; flex-wrap: wrap; justify-content: flex-start;align-items: flex-start;">
<div class="card" style="margin: 10px">
    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M16 12h2v4h-2z"></path><path d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zM5 5h13v2H5a1.001 1.001 0 0 1 0-2zm15 14H5.012C4.55 18.988 4 18.805 4 18V8.815c.314.113.647.185 1 .185h15v10z"></path></svg>
    <div style="font-size: 30px; color: white">Turkish Lira Cash</div>
    <div style="font-size: 30px; color: white">₺ 0</div>
    <div class="overlay"></div>
    <button class="card-btn">Edit</button>
</div>
</div>
<button class="btn">Add Account...</button>


<style>

    .card {
        position: relative;
        width: 350px;
        height: 250px;
        background-image: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100% );
        border-radius: 10px;
        display: flex;
        padding: 10px 30px;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }



    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.6);
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .card:hover .overlay {
        opacity: 1;
        pointer-events: auto;
    }

    .card .card-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        font-weight: 600;
        padding: 10px 20px;
        font-size: 16px;
        transform: translate(-50%, -50%);
        background-color: #ffffff;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 999;
        border: none;
        opacity: 0;
        scale: 0;
        transform-origin: 0 0;
        box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.15);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
    }

    .card:hover .card-btn {
        opacity: 1;
        scale: 1;
    }

    .card .card-btn:hover {
        box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.3);
    }

    .card .card-btn:active {
        scale: 0.95;
    }

    .overlay::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        width: 100%;
        height: 100%;
        background-image: linear-gradient(-45deg, #f89b2980 0%, #ff0f7b80 100% );
        transition: transform 0.5s ease;
    }

    .card:hover .overlay::after {
        transform: translate(-50%, -50%) scale(2);
    }

    .btn {
        transition: all 0.3s ease-in-out;
        font-family: "Dosis", sans-serif;
    }

    .btn {
        width: 150px;
        height: 60px;
        border-radius: 50px;
        background-image: linear-gradient(135deg, #feb692 0%, #ea5455 100%);
        box-shadow: 0 20px 30px -6px rgba(238, 103, 97, 0.5);
        outline: none;
        cursor: pointer;
        border: none;
        font-size: 14px;
        color: white;
        position: fixed;
        bottom: 20px; /* Sayfanın alt kenarına ne kadar yakın olmasını istediğinizi ayarlayın */
        right: 20px;
        z-index: 999;
    }

    .btn:hover {
        transform: translateY(3px);
        box-shadow: none;
    }

    .btn:active {
        opacity: 0.5;
    }



</style>

<?=$this->endSection()?>
