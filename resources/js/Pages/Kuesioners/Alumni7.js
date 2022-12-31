import React from 'react';
import Authenticated from '@/Layouts/Authenticated';
import { Head, Link } from '@inertiajs/inertia-react';
import Button from '@/Components/Button'
import Input from '@/Components/Input'
import { useForm } from '@inertiajs/inertia-react'

export default function Alumni7(props) {
    const { dataKuesioner } = props
    const { data, setData, put, errors } = useForm({
        h1: dataKuesioner.h1 || '',
        h2: dataKuesioner.h2 || '',
        h3: dataKuesioner.h3 || '',
        h4: dataKuesioner.h4 || '',
        h5: dataKuesioner.h5 || '',
        h6: dataKuesioner.h6 || '',
        h7: dataKuesioner.h7 || '',
        h8: dataKuesioner.h8 || '',
        h9: dataKuesioner.h9 || '',
        h10: dataKuesioner.h10 || '',
        h11: dataKuesioner.h11 || '',
        h12: dataKuesioner.h12 || '',
        h13: dataKuesioner.h13 || '',
        h14: dataKuesioner.h14 || '',
        h15: dataKuesioner.h15 || '',
        h16: dataKuesioner.h16 || '',
        h17: dataKuesioner.h17 || '',
        h18: dataKuesioner.h18 || '',
        h19: dataKuesioner.h19 || '',
        h20: dataKuesioner.h20 || '',
        h21: dataKuesioner.h21 || '',
        h22: dataKuesioner.h22 || '',
        h23: dataKuesioner.h23 || '',
        h24: dataKuesioner.h24 || '',
        h25: dataKuesioner.h25 || '',
    })
    const updateHandler = (e) => {
        e.preventDefault()
        put(route('kuesioner.alumni.update7', dataKuesioner.id))
    }
    const handleChange = (e) => setData(e.target.name, e.target.value)
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight flex items-center gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                        </svg>
                        <span>Kuesioner</span>
                    </h2>}
        >
            <Head title="Kuesioner" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                        <div>
                            <form onSubmit={updateHandler}>
                                <div className="mb-6">
                                    <h1 className='text-2xl mb-3 font-semibold'>Umpan balik dari lulusan</h1>
                                    <hr />
                                </div>
                                <div className="mb-5">
                                    <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h1">
                                        Apa alasan Anda memilih pendidikan Vokasi? (boleh lebih dari satu jawaban)
                                    </label>
                                    <label className="block text-gray-500 text-sm mb-2">
                                        (Pendidikan vokasi mencakup SMK, pendidikan tinggi vokasi/politeknik, kursus dan pelatihan)
                                    </label>
                                    <div className='block items-center gap-x-4'>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="checkbox" name="h1" id='h110' onChange={e => setData('h1', e.target.checked)} defaultChecked={data.h1 == '1' && true}/> <label htmlFor='h110' className='text-sm text-gray-700'>Ingin cepat mendapatkan pekerjaan</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="checkbox" name="h2" id='h210' onChange={e => setData('h2', e.target.checked)} defaultChecked={data.h2 == '1' && true}/> <label htmlFor='h210' className='text-sm text-gray-700'>Keterbatasan ekonomi</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="checkbox" name="h3" id='h310' onChange={e => setData('h3', e.target.checked)} defaultChecked={data.h3 == '1' && true}/> <label htmlFor='h310' className='text-sm text-gray-700'>Biaya lebih terjangkau</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="checkbox" name="h4" id='h410' onChange={e => setData('h4', e.target.checked)} defaultChecked={data.h4 == '1' && true}/> <label htmlFor='h410' className='text-sm text-gray-700'>Pilihan sendiri</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="checkbox" name="h5" id='h510' onChange={e => setData('h5', e.target.checked)} defaultChecked={data.h5 == '1' && true}/> <label htmlFor='h510' className='text-sm text-gray-700'>Diajak teman</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="checkbox" name="h6" id='h610' onChange={e => setData('h6', e.target.checked)} defaultChecked={data.h6 == '1' && true}/> <label htmlFor='h610' className='text-sm text-gray-700'>Keinginan orang tua</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="checkbox" name="h7" id='h710' onChange={e => setData('h7', e.target.checked)} defaultChecked={data.h7 == '1' && true}/> <label htmlFor='h710' className='text-sm text-gray-700'>Tidak diterima di sekolah lain</label></div>
                                    </div>
                                </div>
                                <div className="mb-5">
                                    <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">
                                        Seberapa penting kemampuan berikut ini dibutuhkan di instansi/lembaga/perusahaan/tempat Anda bekerja/berwirausaha?
                                    </label>
                                    <div className="ml-4 md:ml-6">
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h8">
                                            Kemampuan menggunakan peralatan teknologi informasi
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h8}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h8" id='h810' defaultChecked={data.h8 === '1' && true} /> <label htmlFor='h810' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h8" id='h820' defaultChecked={data.h8 === '2' && true} /> <label htmlFor='h820' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h8" id='h830' defaultChecked={data.h8 === '3' && true} /> <label htmlFor='h830' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h8" id='h840' defaultChecked={data.h8 === '4' && true} /> <label htmlFor='h840' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h8" id='h850' defaultChecked={data.h8 === '5' && true} /> <label htmlFor='h850' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h8 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h9">
                                            Kemampuan berbahasa asing
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h9}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h9" id='h910' defaultChecked={data.h9 === '1' && true} /> <label htmlFor='h910' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h9" id='h920' defaultChecked={data.h9 === '2' && true} /> <label htmlFor='h920' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h9" id='h930' defaultChecked={data.h9 === '3' && true} /> <label htmlFor='h930' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h9" id='h940' defaultChecked={data.h9 === '4' && true} /> <label htmlFor='h940' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h9" id='h950' defaultChecked={data.h9 === '5' && true} /> <label htmlFor='h950' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h9 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h10">
                                            Kemampuan menyampaikan ide dan solusi
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h10}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h10" id='h1010' defaultChecked={data.h10 === '1' && true} /> <label htmlFor='h1010' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h10" id='h1020' defaultChecked={data.h10 === '2' && true} /> <label htmlFor='h1020' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h10" id='h1030' defaultChecked={data.h10 === '3' && true} /> <label htmlFor='h1030' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h10" id='h1040' defaultChecked={data.h10 === '4' && true} /> <label htmlFor='h1040' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h10" id='h1050' defaultChecked={data.h10 === '5' && true} /> <label htmlFor='h1050' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h10 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h11">
                                            Kemampuan untuk beradaptasi dengan lingkungan kerja
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h11}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h11" id='h1110' defaultChecked={data.h11 === '1' && true} /> <label htmlFor='h1110' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h11" id='h1120' defaultChecked={data.h11 === '2' && true} /> <label htmlFor='h1120' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h11" id='h1130' defaultChecked={data.h11 === '3' && true} /> <label htmlFor='h1130' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h11" id='h1140' defaultChecked={data.h11 === '4' && true} /> <label htmlFor='h1140' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h11" id='h1150' defaultChecked={data.h11 === '5' && true} /> <label htmlFor='h1150' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h11 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h12">
                                            Berpikir analitis
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h12}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h12" id='h1210' defaultChecked={data.h12 === '1' && true} /> <label htmlFor='h1210' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h12" id='h1220' defaultChecked={data.h12 === '2' && true} /> <label htmlFor='h1220' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h12" id='h1230' defaultChecked={data.h12 === '3' && true} /> <label htmlFor='h1230' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h12" id='h1240' defaultChecked={data.h12 === '4' && true} /> <label htmlFor='h1240' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h12" id='h1250' defaultChecked={data.h12 === '5' && true} /> <label htmlFor='h1250' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h12 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h13">
                                            Kemampuan bekerja secara efektif untuk mencapai tujuan
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h13}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h13" id='h1310' defaultChecked={data.h13 === '1' && true} /> <label htmlFor='h1310' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h13" id='h1320' defaultChecked={data.h13 === '2' && true} /> <label htmlFor='h1320' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h13" id='h1330' defaultChecked={data.h13 === '3' && true} /> <label htmlFor='h1330' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h13" id='h1340' defaultChecked={data.h13 === '4' && true} /> <label htmlFor='h1340' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h13" id='h1350' defaultChecked={data.h13 === '5' && true} /> <label htmlFor='h1350' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h13 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h14">
                                            Kemampuan mengelola pekerjaan secara efisien
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h14}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h14" id='h1410' defaultChecked={data.h14 === '1' && true} /> <label htmlFor='h1410' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h14" id='h1420' defaultChecked={data.h14 === '2' && true} /> <label htmlFor='h1420' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h14" id='h1430' defaultChecked={data.h14 === '3' && true} /> <label htmlFor='h1430' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h14" id='h1440' defaultChecked={data.h14 === '4' && true} /> <label htmlFor='h1440' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h14" id='h1450' defaultChecked={data.h14 === '5' && true} /> <label htmlFor='h1450' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h14 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h15">
                                            Kemampuan bekerja sama dalam tim
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h15}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h15" id='h1510' defaultChecked={data.h15 === '1' && true} /> <label htmlFor='h1510' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h15" id='h1520' defaultChecked={data.h15 === '2' && true} /> <label htmlFor='h1520' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h15" id='h1530' defaultChecked={data.h15 === '3' && true} /> <label htmlFor='h1530' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h15" id='h1540' defaultChecked={data.h15 === '4' && true} /> <label htmlFor='h1540' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h15" id='h1550' defaultChecked={data.h15 === '5' && true} /> <label htmlFor='h1550' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h15 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 mt-2" htmlFor="h16">
                                            Berkinerja baik walaupun ada di bawah tekanan
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h16}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h16" id='h1610' defaultChecked={data.h16 === '1' && true} /> <label htmlFor='h1610' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h16" id='h1620' defaultChecked={data.h16 === '2' && true} /> <label htmlFor='h1620' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h16" id='h1630' defaultChecked={data.h16 === '3' && true} /> <label htmlFor='h1630' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h16" id='h1640' defaultChecked={data.h16 === '4' && true} /> <label htmlFor='h1640' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h16" id='h1650' defaultChecked={data.h16 === '5' && true} /> <label htmlFor='h1650' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h16 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                    </div>
                                </div>
                                <div className="mb-5">
                                    <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h17">
                                        Bagaimana keselarasan pekerjaan/wirausaha Anda sekarang dengan prodi/bidang keahlian/keterampilan Anda di satuan pendidikan/sekolah?
                                    </label>
                                    <div className='block items-center gap-x-4' onChange={handleChange} value={data.h17}>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="Sangat tidak selaras" name="h17" id='h1710' defaultChecked={data.h17 === 'Sangat tidak selaras' && true} /> <label htmlFor='h1710' className='text-sm text-gray-700'>Sangat tidak selaras</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="Tidak selaras" name="h17" id='h1720' defaultChecked={data.h17 === 'Tidak selaras' && true} /> <label htmlFor='h1720' className='text-sm text-gray-700'>Tidak selaras</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="Cukup selaras" name="h17" id='h1730' defaultChecked={data.h17 === 'Cukup selaras' && true} /> <label htmlFor='h1730' className='text-sm text-gray-700'>Cukup selaras</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="Selaras" name="h17" id='h1740' defaultChecked={data.h17 === 'Selaras' && true} /> <label htmlFor='h1740' className='text-sm text-gray-700'>Selaras</label></div>
                                        <div><input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="Sangat selaras" name="h17" id='h1750' defaultChecked={data.h17 === 'Sangat selaras' && true} /> <label htmlFor='h1750' className='text-sm text-gray-700'>Sangat selaras</label></div>
                                    </div>
                                    {errors.h17 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                        <span>Required.</span>
                                    </div>}
                                </div>
                                <div className="mb-5">
                                    <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">
                                        Seberapa bermanfaat Studi Anda dikaitkan dengan pekerjaan/wirausaha sekarang?
                                    </label>
                                    <div className="ml-4 md:ml-6">
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h18">
                                            Teori dan praktik
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h18}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h18" id='h1810' defaultChecked={data.h18 === '1' && true} /> <label htmlFor='h1810' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h18" id='h1820' defaultChecked={data.h18 === '2' && true} /> <label htmlFor='h1820' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h18" id='h1830' defaultChecked={data.h18 === '3' && true} /> <label htmlFor='h1830' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h18" id='h1840' defaultChecked={data.h18 === '4' && true} /> <label htmlFor='h1840' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h18" id='h1850' defaultChecked={data.h18 === '5' && true} /> <label htmlFor='h1850' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h18 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h19">
                                            Sikap dan kemampuan berkomunikasi (budaya kerja)
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h19}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h19" id='h1910' defaultChecked={data.h19 === '1' && true} /> <label htmlFor='h1910' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h19" id='h1920' defaultChecked={data.h19 === '2' && true} /> <label htmlFor='h1920' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h19" id='h1930' defaultChecked={data.h19 === '3' && true} /> <label htmlFor='h1930' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h19" id='h1940' defaultChecked={data.h19 === '4' && true} /> <label htmlFor='h1940' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h19" id='h1950' defaultChecked={data.h19 === '5' && true} /> <label htmlFor='h1950' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h19 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h20">
                                            Jejaring kerja sama dengan DUDI
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h20}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h20" id='h2010' defaultChecked={data.h20 === '1' && true} /> <label htmlFor='h2010' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h20" id='h2020' defaultChecked={data.h20 === '2' && true} /> <label htmlFor='h2020' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h20" id='h2030' defaultChecked={data.h20 === '3' && true} /> <label htmlFor='h2030' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h20" id='h2040' defaultChecked={data.h20 === '4' && true} /> <label htmlFor='h2040' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h20" id='h2050' defaultChecked={data.h20 === '5' && true} /> <label htmlFor='h2050' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h20 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h21">
                                            Kemandirian (budaya kerja)
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h21}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h21" id='h2110' defaultChecked={data.h21 === '1' && true} /> <label htmlFor='h2110' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h21" id='h2120' defaultChecked={data.h21 === '2' && true} /> <label htmlFor='h2120' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h21" id='h2130' defaultChecked={data.h21 === '3' && true} /> <label htmlFor='h2130' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h21" id='h2140' defaultChecked={data.h21 === '4' && true} /> <label htmlFor='h2140' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h21" id='h2150' defaultChecked={data.h21 === '5' && true} /> <label htmlFor='h2150' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h21 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h22">
                                            Magang/prakerin
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h22}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h22" id='h2210' defaultChecked={data.h22 === '1' && true} /> <label htmlFor='h2210' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h22" id='h2220' defaultChecked={data.h22 === '2' && true} /> <label htmlFor='h2220' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h22" id='h2230' defaultChecked={data.h22 === '3' && true} /> <label htmlFor='h2230' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h22" id='h2240' defaultChecked={data.h22 === '4' && true} /> <label htmlFor='h2240' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h22" id='h2250' defaultChecked={data.h22 === '5' && true} /> <label htmlFor='h2250' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h22 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h23">
                                            Kelengkapan sarana dan teknologi pembelajaran
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h23}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h23" id='h2310' defaultChecked={data.h23 === '1' && true} /> <label htmlFor='h2310' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h23" id='h2320' defaultChecked={data.h23 === '2' && true} /> <label htmlFor='h2320' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h23" id='h2330' defaultChecked={data.h23 === '3' && true} /> <label htmlFor='h2330' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h23" id='h2340' defaultChecked={data.h23 === '4' && true} /> <label htmlFor='h2340' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h23" id='h2350' defaultChecked={data.h23 === '5' && true} /> <label htmlFor='h2350' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h23 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h24">
                                            Kemampuan bekerja sama (budaya kerja)
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h24}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h24" id='h2410' defaultChecked={data.h24 === '1' && true} /> <label htmlFor='h2410' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h24" id='h2420' defaultChecked={data.h24 === '2' && true} /> <label htmlFor='h2420' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h24" id='h2430' defaultChecked={data.h24 === '3' && true} /> <label htmlFor='h2430' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h24" id='h2440' defaultChecked={data.h24 === '4' && true} /> <label htmlFor='h2440' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h24" id='h2450' defaultChecked={data.h24 === '5' && true} /> <label htmlFor='h2450' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h24 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                        <label className="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans" htmlFor="h25">
                                            Menulis tugas akhir
                                        </label>
                                        <div className='flex items-center gap-x-4 border w-fit p-1 rounded-md px-3 mb-5' onChange={handleChange} value={data.h25}>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="1" name="h25" id='h2510' defaultChecked={data.h25 === '1' && true} /> <label htmlFor='h2510' className='text-sm text-gray-700'>1</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="2" name="h25" id='h2520' defaultChecked={data.h25 === '2' && true} /> <label htmlFor='h2520' className='text-sm text-gray-700'>2</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="3" name="h25" id='h2530' defaultChecked={data.h25 === '3' && true} /> <label htmlFor='h2530' className='text-sm text-gray-700'>3</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="4" name="h25" id='h2540' defaultChecked={data.h25 === '4' && true} /> <label htmlFor='h2540' className='text-sm text-gray-700'>4</label>
                                            <input className='border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800' type="radio" value="5" name="h25" id='h2550' defaultChecked={data.h25 === '5' && true} /> <label htmlFor='h2550' className='text-sm text-gray-700'>5</label>
                                        </div>
                                        {errors.h25 && <div className='text-red-600 mt-1 flex items-center gap-x-2'>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                            <span>Required.</span>
                                        </div>}
                                    </div>
                                </div>
                                <hr />
                                <div className='flex items-center gap-x-4 mt-5'>
                                    <div className='w-1/2'>
                                        {dataKuesioner.d1 !== null && <Link className='inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-black shadow-md transition duration-200 bg-white rounded-lg hover:bg-gray-50 focus:shadow-outline focus:outline-none' href={route('kuesioner.alumni.edit4', dataKuesioner.id)}>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fillRule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clipRule="evenodd" />
                                            </svg>
                                        </Link>}
                                        {dataKuesioner.e1 !== null && <Link className='inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-black shadow-md transition duration-200 bg-white rounded-lg hover:bg-gray-50 focus:shadow-outline focus:outline-none' href={route('kuesioner.alumni.edit5', dataKuesioner.id)}>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fillRule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clipRule="evenodd" />
                                            </svg>
                                        </Link>}
                                        {dataKuesioner.f1 !== null && <Link className='inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-black shadow-md transition duration-200 bg-white rounded-lg hover:bg-gray-50 focus:shadow-outline focus:outline-none' href={route('kuesioner.alumni.edit6', dataKuesioner.id)}>
                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fillRule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clipRule="evenodd" />
                                            </svg>
                                        </Link>}
                                    </div>
                                    <div className='w-1/2'>
                                        <div className="grid justify-end">
                                            <Button>
                                                Store
                                            </Button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </Authenticated>
    );
}
