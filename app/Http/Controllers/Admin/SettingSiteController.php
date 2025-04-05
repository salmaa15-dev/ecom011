<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\settings\SiteRequest;
use App\Http\Requests\settings\UpdateSiteRequest;

class SettingSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.settings-site.show-settings', ['setting' => Setting::first()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Setting::count()) {
            return view('back-end.settings-site.create-settings');
        } else {
            return redirect('admin.settings.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Requests\Settings\SiteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteRequest $request)
    {
        if($request->hasFile('logo_top')) {
            $logo_top = $request->file('logo_top')->store('settings-Site-logo-top', 'public');
        }
        if($request->hasFile('logo_footer')) {
            $logo_footer = $request->file('logo_footer')->store('settings-Site-logo-footer', 'public');
        }

        Setting::create([
            'title'       => $request->input('title'),
            'email'       => $request->input('email'),
            'phone'       => $request->input('phone'),
            'instagram'   => $request->input('instagram'),
            'facebook'    => $request->input('facebook'),
            'map'         => $request->input('map'),
            'description' => $request->input('description'),
            'adresse'     => $request->input('adresse'),
            'logo1'       => $logo_top ?? '',
            'logo2'       => $logo_footer ?? ''
        ]);

        return redirect()
            ->route('admin.settings.index')
            ->with('success', 'data changed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back-end.settings-site.edit-settings', ['setting' => Setting::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Requests\Settings\UpdateSiteRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiteRequest $request, $id)
    {
        $setting = Setting::findOrFail($id);

        $setting->title         = $request->input('title');
        $setting->email         = $request->input('email');
        $setting->phone         = $request->input('phone');
        $setting->instagram     = $request->input('instagram');
        $setting->facebook      = $request->input('facebook');
        $setting->map           = $request->input('map');
        $setting->description   =  $request->input('description');
        $setting->adresse       =  $request->input('adresse');

        if($request->hasFile('logo_top')) {
            Storage::disk('public')->delete($setting->logo1);
            $setting->logo1 = $request->file('logo_top')
                ->store('settings-Site-logo-top', 'public');
        }
        if($request->hasFile('logo_footer')) {
            Storage::disk('public')->delete($setting->logo2);
            $setting->logo2 = $request->file('logo_footer')
                ->store('settings-Site-logo-footer', 'public');
        }

        $setting->save();
        return redirect()->route('admin.settings.index')
            ->with('success', 'This information changes successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Requests\Settings\DropLogoNav $request
     * @return \Illuminate\Http\Response
     */
    public function dropLogoNav()
    {
        $setting =Setting::find(request()->id);
        $setting->update([
            'logo1' => null
        ]);
        Storage::disk('public')->delete($setting->logo1);
        return redirect()->route('admin.settings.index')
            ->with('success', 'This Logo the Nav Bar is drop successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Requests\Settings\dropLogoFooter $request
     * @return \Illuminate\Http\Response
     */
    public function dropLogoFooter()
    {
        $setting = Setting::find(request()->id);
        $setting->update([
            'logo2' => null
        ]);
        Storage::disk('public')->delete($setting->logo2);
        return redirect()->route('admin.settings.index')
            ->with('success', 'This Logo the Footer is drop successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Setting::findOrFail($id)->delete();
        return redirect()->back();
    }
}
